<?php

namespace App\Http\Controllers;

use App\Models\Convocatoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ConvocatoriaController extends Controller
{
    private $tipos = ['convocatoria', 'evento', 'anuncio'];
    private $estados = ['borrador', 'publicado'];

    /**
     * Constructor - solo aplica middleware para web
     */
    

    /**
     * API: Listar convocatorias del usuario comunicación
     * WEB: Mostrar vista de convocatorias
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        
        // Comunicación solo ve sus propias convocatorias
        $convocatorias = Convocatoria::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get();
        
        // Si es API, devolver JSON
        if ($request->expectsJson()) {
            // Agregar URLs
            $convocatorias->transform(function ($convocatoria) {
                $convocatoria->pdf_url = $convocatoria->pdf 
                    ? asset('storage/convocatorias/pdf/' . $convocatoria->pdf) 
                    : null;
                $convocatoria->imagen_url = $convocatoria->imagen 
                    ? asset('storage/convocatorias/imagenes/' . $convocatoria->imagen) 
                    : null;
                return $convocatoria;
            });
            
            return response()->json([
                'status' => true,
                'convocatorias' => $convocatorias,
                'tipos' => $this->tipos,
                'estados' => $this->estados
            ]);
        }
        
        // Si es web, devolver vista
        return view('comunicacion.index', compact('convocatorias'));
    }

    /**
     * API: Mostrar convocatoria específica
     * WEB: Mostrar vista de detalle
     */
    public function show($id)
    {
        $convocatoria = Convocatoria::where('user_id', Auth::id())->find($id);
        
        if (!$convocatoria) {
            if (request()->expectsJson()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Convocatoria no encontrada'
                ], 404);
            }
            abort(404);
        }

        // Si es API
        if (request()->expectsJson()) {
            $convocatoria->pdf_url = $convocatoria->pdf 
                ? asset('storage/convocatorias/pdf/' . $convocatoria->pdf) 
                : null;
            $convocatoria->imagen_url = $convocatoria->imagen 
                ? asset('storage/convocatorias/imagenes/' . $convocatoria->imagen) 
                : null;
                
            return response()->json([
                'status' => true,
                'convocatoria' => $convocatoria
            ]);
        }
        
        // Si es web
        $pdfPath = storage_path('app/public/convocatorias/pdf/' . $convocatoria->pdf);
        $pdfExiste = file_exists($pdfPath);
        
        return view('comunicacion.show', compact('convocatoria', 'pdfExiste', 'pdfPath'));
    }

    /**
     * WEB: Mostrar formulario para crear convocatoria
     */
    public function create()
    {
        return view('comunicacion.create', [
            'tipos' => $this->tipos,
            'estados' => $this->estados
        ]);
    }

    /**
     * API/WEB: Crear nueva convocatoria
     */
  public function store(Request $request)
{
    $request->validate([
        'titulo' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'tipo' => 'required|in:' . implode(',', $this->tipos),
        'fecha_inicio' => 'nullable|date',
        'fecha_fin' => 'nullable|date|after_or_equal:fecha_inicio',
        'lugar' => 'nullable|string|max:255',
        'estado' => 'required|in:' . implode(',', $this->estados),
        'pdf' => 'required|file|mimes:pdf|max:10240',
        'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    ]);

    try {
        // DEBUG INICIAL
        \Log::info('=== INICIANDO SUBIDA DE CONVOCATORIA ===');
        \Log::info('PDF recibido: ' . ($request->hasFile('pdf') ? 'SÍ' : 'NO'));
        \Log::info('Imagen recibida: ' . ($request->hasFile('imagen') ? 'SÍ' : 'NO'));

        // Asegurar que tenemos directorios
        $this->crearDirectoriosSiNoExisten();

        // Manejar PDF - SIMPLIFICADO Y ROBUSTO
        $pdf = $request->file('pdf');
        $pdfNombre = $this->generarNombreArchivo($request->titulo, $pdf, 'pdf');
        
        \Log::info('Guardando PDF: ' . $pdfNombre);
        
        // Método SIMPLE y directo para PDF
        $pdfPath = storage_path('app/public/convocatorias/pdf/' . $pdfNombre);
        
        // Usar move() que es más confiable
        if ($pdf->move(storage_path('app/public/convocatorias/pdf'), $pdfNombre)) {
            \Log::info('✅ PDF guardado exitosamente en: ' . $pdfPath);
            \Log::info('Tamaño PDF: ' . filesize($pdfPath) . ' bytes');
        } else {
            \Log::error('❌ Error al mover PDF');
            throw new \Exception('No se pudo guardar el PDF');
        }

        // Manejar imagen - Mantener como está (ya funciona)
        $imagenNombre = null;
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $imagenNombre = $this->generarNombreArchivo($request->titulo, $imagen, 'imagen');
            
            \Log::info('Guardando imagen: ' . $imagenNombre);
            
            $imagenPath = storage_path('app/public/convocatorias/imagenes/' . $imagenNombre);
            
            if ($imagen->move(storage_path('app/public/convocatorias/imagenes'), $imagenNombre)) {
                \Log::info('✅ Imagen guardada exitosamente en: ' . $imagenPath);
            }
        }

        // Crear convocatoria en BD
        $convocatoria = Convocatoria::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'tipo' => $request->tipo,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
            'lugar' => $request->lugar,
            'estado' => $request->estado,
            'pdf' => $pdfNombre,
            'imagen' => $imagenNombre,
            'user_id' => Auth::id(),
        ]);

        \Log::info('Convocatoria creada ID: ' . $convocatoria->id);

        // Verificar que los archivos existen
        $this->verificarArchivos($convocatoria);

        return redirect()->route('comunicacion.index')
            ->with('success', 'Convocatoria creada exitosamente')
            ->with('debug_pdf', 'PDF: ' . $pdfNombre)
            ->with('debug_imagen', 'Imagen: ' . ($imagenNombre ?: 'Ninguna'));

    } catch (\Exception $e) {
        \Log::error('ERROR en store(): ' . $e->getMessage());
        \Log::error($e->getTraceAsString());
        
        return redirect()->back()
            ->withInput()
            ->withErrors(['error' => 'Error al crear la convocatoria: ' . $e->getMessage()]);
    }
}

/**
 * Métodos auxiliares para organizar el código
 */
private function crearDirectoriosSiNoExisten()
{
    $directorios = [
        'pdf' => storage_path('app/public/convocatorias/pdf'),
        'imagenes' => storage_path('app/public/convocatorias/imagenes')
    ];
    
    foreach ($directorios as $tipo => $ruta) {
        if (!file_exists($ruta)) {
            mkdir($ruta, 0755, true);
            \Log::info("Directorio {$tipo} creado: {$ruta}");
        } else {
            \Log::info("Directorio {$tipo} ya existe: {$ruta}");
        }
    }
}

private function generarNombreArchivo($titulo, $archivo, $tipo)
{
    $slug = Str::slug($titulo);
    if (empty($slug)) {
        $slug = 'archivo';
    }
    
    $timestamp = time();
    $extension = $archivo->getClientOriginalExtension();
    
    return $timestamp . '_' . $slug . '.' . $extension;
}

private function verificarArchivos($convocatoria)
{
    // Verificar PDF
    $pdfPath = storage_path('app/public/convocatorias/pdf/' . $convocatoria->pdf);
    $pdfExiste = file_exists($pdfPath);
    
    \Log::info('Verificación PDF:');
    \Log::info('  - Nombre en BD: ' . $convocatoria->pdf);
    \Log::info('  - Ruta: ' . $pdfPath);
    \Log::info('  - Existe: ' . ($pdfExiste ? '✅ SÍ' : '❌ NO'));
    
    if ($pdfExiste) {
        \Log::info('  - Tamaño: ' . filesize($pdfPath) . ' bytes');
    }
    
    // Verificar imagen si existe
    if ($convocatoria->imagen) {
        $imagenPath = storage_path('app/public/convocatorias/imagenes/' . $convocatoria->imagen);
        $imagenExiste = file_exists($imagenPath);
        
        \Log::info('Verificación Imagen:');
        \Log::info('  - Nombre en BD: ' . $convocatoria->imagen);
        \Log::info('  - Ruta: ' . $imagenPath);
        \Log::info('  - Existe: ' . ($imagenExiste ? '✅ SÍ' : '❌ NO'));
    }
    
    \Log::info('=== FIN VERIFICACIÓN ===');
}

    /**
     * WEB: Mostrar formulario para editar
     */
    public function edit($id)
    {
        $convocatoria = Convocatoria::where('user_id', Auth::id())->findOrFail($id);
        
        return view('comunicacion.edit', [
            'convocatoria' => $convocatoria,
            'tipos' => $this->tipos,
            'estados' => $this->estados
        ]);
    }

    /**
 * API: Convocatorias públicas (versión simple sin paginación)
 */
public function indexPublic(Request $request)
{
    \Log::info('=== INDEX PUBLIC LLAMADO ===');
    \Log::info('Request: ' . json_encode($request->all()));
    
    $query = Convocatoria::where('estado', 'publicado')
        ->orderBy('created_at', 'desc');

    if ($request->filled('tipo')) {
        $query->where('tipo', $request->tipo);
    }

    if ($request->filled('search')) {
        $query->where('titulo', 'like', "%{$request->search}%");
    }

    $convocatorias = $query->get();  // ¡get() en lugar de paginate()!

    \Log::info('Convocatorias encontradas: ' . $convocatorias->count());

    // Agregar URLs
    $convocatorias->transform(function ($convocatoria) {
        $convocatoria->pdf_url = $convocatoria->pdf 
            ? asset('storage/convocatorias/pdf/' . $convocatoria->pdf) 
            : null;
        $convocatoria->imagen_url = $convocatoria->imagen 
            ? asset('storage/convocatorias/imagenes/' . $convocatoria->imagen) 
            : null;
            
        \Log::info("Convocatoria {$convocatoria->id}:");
        \Log::info("  - PDF URL: {$convocatoria->pdf_url}");
        \Log::info("  - Imagen URL: {$convocatoria->imagen_url}");
        
        return $convocatoria;
    });

    return response()->json([
        'status' => true,
        'message' => 'Convocatorias obtenidas exitosamente',
        'convocatorias' => $convocatorias,
        'total' => $convocatorias->count()
    ]);
}

/**
 * API: Mostrar convocatoria pública (versión simple)
 */
public function showPublic($id)
{
    \Log::info('=== SHOW PUBLIC LLAMADO ===');
    \Log::info('ID solicitado: ' . $id);
    
    $convocatoria = Convocatoria::where('estado', 'publicado')->find($id);

    if (!$convocatoria) {
        \Log::warning('Convocatoria no encontrada ID: ' . $id);
        return response()->json([
            'status' => false,
            'message' => 'Convocatoria no encontrada o no publicada'
        ], 404);
    }

    $convocatoria->pdf_url = $convocatoria->pdf 
        ? asset('storage/convocatorias/pdf/' . $convocatoria->pdf) 
        : null;
    $convocatoria->imagen_url = $convocatoria->imagen 
        ? asset('storage/convocatorias/imagenes/' . $convocatoria->imagen) 
        : null;

    \Log::info('Convocatoria encontrada: ' . $convocatoria->titulo);

    return response()->json([
        'status' => true,
        'message' => 'Convocatoria obtenida exitosamente',
        'convocatoria' => $convocatoria
    ]);
}

    /**
     * API/WEB: Actualizar convocatoria
     */
   public function update(Request $request, $id)
{
    $convocatoria = Convocatoria::where('user_id', Auth::id())->find($id);

    if (!$convocatoria) {
        abort(404);
    }

    $request->validate([
        'titulo' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'tipo' => 'required|in:' . implode(',', $this->tipos),
        'fecha_inicio' => 'nullable|date',
        'fecha_fin' => 'nullable|date|after_or_equal:fecha_inicio',
        'lugar' => 'nullable|string|max:255',
        'estado' => 'required|in:' . implode(',', $this->estados),
        'pdf' => 'nullable|file|mimes:pdf|max:10240',
        'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    ]);

    try {
        \Log::info('=== ACTUALIZANDO CONVOCATORIA ID: ' . $id . ' ===');
        
        // Asegurar directorios
        $this->crearDirectoriosSiNoExisten();

        // Manejar PDF (si se envía uno nuevo)
        if ($request->hasFile('pdf')) {
            \Log::info('Nuevo PDF recibido para actualización');
            
            // Eliminar PDF anterior si existe
            if ($convocatoria->pdf) {
                $oldPdfPath = storage_path('app/public/convocatorias/pdf/' . $convocatoria->pdf);
                if (file_exists($oldPdfPath)) {
                    unlink($oldPdfPath);
                    \Log::info('PDF anterior eliminado: ' . $convocatoria->pdf);
                }
            }
            
            $pdf = $request->file('pdf');
            $pdfNombre = $this->generarNombreArchivo($request->titulo, $pdf, 'pdf');
            $pdfPath = storage_path('app/public/convocatorias/pdf/' . $pdfNombre);
            
            if ($pdf->move(storage_path('app/public/convocatorias/pdf'), $pdfNombre)) {
                $convocatoria->pdf = $pdfNombre;
                \Log::info('✅ Nuevo PDF guardado: ' . $pdfNombre);
            }
        }

        // Manejar imagen (si se envía una nueva)
        if ($request->hasFile('imagen')) {
            \Log::info('Nueva imagen recibida para actualización');
            
            // Eliminar imagen anterior si existe
            if ($convocatoria->imagen) {
                $oldImgPath = storage_path('app/public/convocatorias/imagenes/' . $convocatoria->imagen);
                if (file_exists($oldImgPath)) {
                    unlink($oldImgPath);
                    \Log::info('Imagen anterior eliminada: ' . $convocatoria->imagen);
                }
            }
            
            $imagen = $request->file('imagen');
            $imagenNombre = $this->generarNombreArchivo($request->titulo, $imagen, 'imagen');
            $imagenPath = storage_path('app/public/convocatorias/imagenes/' . $imagenNombre);
            
            if ($imagen->move(storage_path('app/public/convocatorias/imagenes'), $imagenNombre)) {
                $convocatoria->imagen = $imagenNombre;
                \Log::info('✅ Nueva imagen guardada: ' . $imagenNombre);
            }
        }

        // Actualizar otros campos
        $convocatoria->update([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'tipo' => $request->tipo,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
            'lugar' => $request->lugar,
            'estado' => $request->estado,
        ]);

        // Verificar archivos después de actualizar
        $this->verificarArchivos($convocatoria);

        return redirect()->route('comunicacion.show', $convocatoria->id)
            ->with('success', 'Convocatoria actualizada exitosamente')
            ->with('debug', 'Actualización completada');

    } catch (\Exception $e) {
        \Log::error('ERROR en update(): ' . $e->getMessage());
        
        return redirect()->back()
            ->withInput()
            ->withErrors(['error' => 'Error al actualizar la convocatoria: ' . $e->getMessage()]);
    }
}

    /**
     * API/WEB: Eliminar convocatoria
     */
    public function destroy($id)
    {
        $convocatoria = Convocatoria::where('user_id', Auth::id())->find($id);

        if (!$convocatoria) {
            if (request()->expectsJson()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Convocatoria no encontrada'
                ], 404);
            }
            abort(404);
        }

        try {
            // Eliminar archivos
            if ($convocatoria->pdf) {
                Storage::delete('public/convocatorias/pdf/' . $convocatoria->pdf);
            }
            if ($convocatoria->imagen) {
                Storage::delete('public/convocatorias/imagenes/' . $convocatoria->imagen);
            }

            $convocatoria->delete();

            // Si es API
            if (request()->expectsJson()) {
                return response()->json([
                    'status' => true,
                    'message' => 'Convocatoria eliminada exitosamente'
                ]);
            }

            // Si es web
            return redirect()->route('comunicacion.index')
                ->with('success', 'Convocatoria eliminada exitosamente');

        } catch (\Exception $e) {
            // Si es API
            if (request()->expectsJson()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Error al eliminar la convocatoria: ' . $e->getMessage()
                ], 500);
            }

            // Si es web
            return redirect()->back()
                ->with('error', 'Error al eliminar la convocatoria.');
        }
    }

    /**
     * API: Cambiar estado de convocatoria
     */
    public function cambiarEstado(Request $request, $id)
    {
        $convocatoria = Convocatoria::where('user_id', Auth::id())->find($id);

        if (!$convocatoria) {
            return response()->json([
                'status' => false,
                'message' => 'Convocatoria no encontrada'
            ], 404);
        }

        $request->validate([
            'estado' => 'required|in:' . implode(',', $this->estados)
        ]);

        $convocatoria->update(['estado' => $request->estado]);

        return response()->json([
            'status' => true,
            'message' => 'Estado actualizado exitosamente',
            'convocatoria' => $convocatoria
        ]);
    }

    /**
     * WEB: Cambiar estado (versión para web)
     */
    public function cambiarEstadoWeb($id, $estado)
    {
        if (!in_array($estado, $this->estados)) {
            return redirect()->back()->with('error', 'Estado no válido');
        }

        $convocatoria = Convocatoria::where('user_id', Auth::id())->findOrFail($id);
        $convocatoria->update(['estado' => $estado]);

        return redirect()->back()
            ->with('success', 'Estado actualizado');
    }

    /**
     * API: Convocatorias públicas (sin autenticación)
     */
    public function indexPublicadas(Request $request)
    {
        $query = Convocatoria::where('estado', 'publicado')
            ->orderBy('created_at', 'desc');

        if ($request->filled('tipo')) {
            $query->where('tipo', $request->tipo);
        }

        if ($request->filled('search')) {
            $query->where('titulo', 'like', "%{$request->search}%");
        }

        $convocatorias = $query->paginate($request->get('per_page', 10));

        // Agregar URLs
        $convocatorias->getCollection()->transform(function ($convocatoria) {
            $convocatoria->pdf_url = $convocatoria->pdf 
                ? asset('storage/convocatorias/pdf/' . $convocatoria->pdf) 
                : null;
            $convocatoria->imagen_url = $convocatoria->imagen 
                ? asset('storage/convocatorias/imagenes/' . $convocatoria->imagen) 
                : null;
            return $convocatoria;
        });

        return response()->json([
            'status' => true,
            'convocatorias' => $convocatorias
        ]);
    }

    /**
     * API: Mostrar convocatoria pública específica
     */
    public function showPublicada($id)
    {
        $convocatoria = Convocatoria::where('estado', 'publicado')->find($id);

        if (!$convocatoria) {
            return response()->json([
                'status' => false,
                'message' => 'Convocatoria no encontrada o no publicada'
            ], 404);
        }

        $convocatoria->pdf_url = $convocatoria->pdf 
            ? asset('storage/convocatorias/pdf/' . $convocatoria->pdf) 
            : null;
        $convocatoria->imagen_url = $convocatoria->imagen 
            ? asset('storage/convocatorias/imagenes/' . $convocatoria->imagen) 
            : null;

        return response()->json([
            'status' => true,
            'convocatoria' => $convocatoria
        ]);
    }

    /**
     * Visualizar PDF en navegador (público)
     */
    public function verPdf($id)
    {
        $convocatoria = Convocatoria::find($id);
        
        if (!$convocatoria || !$convocatoria->pdf) {
            abort(404, 'PDF no encontrado');
        }
        
        $path = storage_path('app/public/convocatorias/pdf/' . $convocatoria->pdf);
        
        if (!file_exists($path)) {
            abort(404, 'Archivo no encontrado');
        }
        
        return response()->file($path, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $convocatoria->pdf . '"'
        ]);
    }

    /**
     * Visualizar imagen (pública)
     */
    public function verImagen($id)
    {
        $convocatoria = Convocatoria::find($id);
        
        if (!$convocatoria || !$convocatoria->imagen) {
            abort(404, 'Imagen no encontrada');
        }
        
        $path = storage_path('app/public/convocatorias/imagenes/' . $convocatoria->imagen);
        
        if (!file_exists($path)) {
            abort(404, 'Archivo no encontrado');
        }
        
        $extension = pathinfo($path, PATHINFO_EXTENSION);
        $contentType = 'image/' . ($extension === 'jpg' ? 'jpeg' : $extension);
        
        return response()->file($path, [
            'Content-Type' => $contentType,
        ]);
    }

    /**
     * API/WEB: Descargar PDF
     */
    public function descargarPdf($id)
    {
        $convocatoria = Convocatoria::where('user_id', Auth::id())->find($id);
        
        if (!$convocatoria) {
            if (request()->expectsJson()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Convocatoria no encontrada'
                ], 404);
            }
            abort(404);
        }
        
        if (!$convocatoria->pdf) {
            if (request()->expectsJson()) {
                return response()->json([
                    'status' => false,
                    'message' => 'PDF no encontrado'
                ], 404);
            }
            abort(404, 'PDF no encontrado');
        }
        
        $path = storage_path('app/public/convocatorias/pdf/' . $convocatoria->pdf);
        
        if (!file_exists($path)) {
            if (request()->expectsJson()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Archivo no encontrado'
                ], 404);
            }
            abort(404, 'Archivo no encontrado');
        }
        
        return response()->download($path, $convocatoria->titulo . '.pdf');
    }

    /**
     * WEB: Descargar PDF (versión para web con ruta nombrada)
     */
    public function descargarPdfWeb($id)
    {
        $convocatoria = Convocatoria::where('user_id', Auth::id())->findOrFail($id);
        
        if (!$convocatoria->pdf) {
            abort(404, 'PDF no encontrado');
        }
        
        $path = storage_path('app/public/convocatorias/pdf/' . $convocatoria->pdf);
        
        if (!file_exists($path)) {
            abort(404, 'Archivo no encontrado');
        }
        
        return response()->download($path, $convocatoria->titulo . '.pdf');
    }

    /**
     * WEB: Ver PDF en navegador (versión para web con ruta nombrada)
     */
    public function verPdfWeb($id)
    {
        $convocatoria = Convocatoria::where('user_id', Auth::id())->findOrFail($id);
        
        if (!$convocatoria->pdf) {
            abort(404, 'PDF no encontrado');
        }
        
        $path = storage_path('app/public/convocatorias/pdf/' . $convocatoria->pdf);
        
        if (!file_exists($path)) {
            abort(404, 'Archivo no encontrado');
        }
        
        return response()->file($path, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $convocatoria->pdf . '"'
        ]);
    }

    /**
     * Método para verificar si tiene PDF (helper)
     */
    private function tienePdf($convocatoria)
    {
        return !empty($convocatoria->pdf) && Storage::exists('public/convocatorias/pdf/' . $convocatoria->pdf);
    }

    /**
     * Método para verificar si tiene imagen (helper)
     */
    private function tieneImagen($convocatoria)
    {
        return !empty($convocatoria->imagen) && Storage::exists('public/convocatorias/imagenes/' . $convocatoria->imagen);
    }
}