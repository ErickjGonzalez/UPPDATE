<?php

namespace App\Http\Controllers;

use App\Models\Convocatoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ConvocatoriaController extends Controller
{
    private array $tipos   = ['convocatoria', 'evento', 'anuncio'];
    private array $estados = ['borrador', 'publicado'];

    public function index(Request $request)
    {
        $convocatorias = Convocatoria::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        if ($request->expectsJson()) {
            return response()->json([
                'status'        => true,
                'convocatorias' => $this->appendUrls($convocatorias),
                'tipos'         => $this->tipos,
                'estados'       => $this->estados,
            ]);
        }

        return view('comunicacion.index', compact('convocatorias'));
    }

    public function show($id)
    {
        $convocatoria = $this->findOwned($id);

        if (!$convocatoria) {
            return request()->expectsJson()
                ? response()->json(['status' => false, 'message' => 'Convocatoria no encontrada.'], 404)
                : abort(404);
        }

        if (request()->expectsJson()) {
            return response()->json([
                'status'       => true,
                'convocatoria' => $this->appendUrl($convocatoria),
            ]);
        }

        $pdfPath   = storage_path('app/public/convocatorias/pdf/' . $convocatoria->pdf);
        $pdfExiste = file_exists($pdfPath);

        return view('comunicacion.show', compact('convocatoria', 'pdfExiste', 'pdfPath'));
    }

    public function create()
    {
        return view('comunicacion.create', [
            'tipos'   => $this->tipos,
            'estados' => $this->estados,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo'       => 'required|string|max:255',
            'descripcion'  => 'required|string',
            'tipo'         => 'required|in:' . implode(',', $this->tipos),
            'fecha_inicio' => 'nullable|date',
            'fecha_fin'    => 'nullable|date|after_or_equal:fecha_inicio',
            'lugar'        => 'nullable|string|max:255',
            'estado'       => 'required|in:' . implode(',', $this->estados),
            'pdf'          => 'required|file|mimes:pdf|max:10240',
            'imagen'       => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        try {
            $this->ensureDirectories();

            $pdfNombre = $this->moveFile($request->file('pdf'), $request->titulo, 'pdf');

            $imagenNombre = null;
            if ($request->hasFile('imagen')) {
                $imagenNombre = $this->moveFile($request->file('imagen'), $request->titulo, 'imagenes');
            }

            Convocatoria::create([
                'titulo'       => $request->titulo,
                'descripcion'  => $request->descripcion,
                'tipo'         => $request->tipo,
                'fecha_inicio' => $request->fecha_inicio,
                'fecha_fin'    => $request->fecha_fin,
                'lugar'        => $request->lugar,
                'estado'       => $request->estado,
                'pdf'          => $pdfNombre,
                'imagen'       => $imagenNombre,
                'user_id'      => Auth::id(),
            ]);

            return redirect()->route('comunicacion.index')
                ->with('success', 'Convocatoria creada exitosamente.');

        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Error al crear la convocatoria: ' . $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $convocatoria = Convocatoria::where('user_id', Auth::id())->findOrFail($id);

        return view('comunicacion.edit', [
            'convocatoria' => $convocatoria,
            'tipos'        => $this->tipos,
            'estados'      => $this->estados,
        ]);
    }

    public function update(Request $request, $id)
    {
        $convocatoria = $this->findOwned($id);

        if (!$convocatoria) {
            abort(404);
        }

        $request->validate([
            'titulo'       => 'required|string|max:255',
            'descripcion'  => 'required|string',
            'tipo'         => 'required|in:' . implode(',', $this->tipos),
            'fecha_inicio' => 'nullable|date',
            'fecha_fin'    => 'nullable|date|after_or_equal:fecha_inicio',
            'lugar'        => 'nullable|string|max:255',
            'estado'       => 'required|in:' . implode(',', $this->estados),
            'pdf'          => 'nullable|file|mimes:pdf|max:10240',
            'imagen'       => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        try {
            $this->ensureDirectories();

            if ($request->hasFile('pdf')) {
                $this->deleteFile('pdf', $convocatoria->pdf);
                $convocatoria->pdf = $this->moveFile($request->file('pdf'), $request->titulo, 'pdf');
            }

            if ($request->hasFile('imagen')) {
                $this->deleteFile('imagenes', $convocatoria->imagen);
                $convocatoria->imagen = $this->moveFile($request->file('imagen'), $request->titulo, 'imagenes');
            }

            $convocatoria->update([
                'titulo'       => $request->titulo,
                'descripcion'  => $request->descripcion,
                'tipo'         => $request->tipo,
                'fecha_inicio' => $request->fecha_inicio,
                'fecha_fin'    => $request->fecha_fin,
                'lugar'        => $request->lugar,
                'estado'       => $request->estado,
            ]);

            return redirect()->route('comunicacion.show', $convocatoria->id)
                ->with('success', 'Convocatoria actualizada exitosamente.');

        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Error al actualizar la convocatoria: ' . $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $convocatoria = $this->findOwned($id);

        if (!$convocatoria) {
            return request()->expectsJson()
                ? response()->json(['status' => false, 'message' => 'Convocatoria no encontrada.'], 404)
                : abort(404);
        }

        try {
            $this->deleteFile('pdf', $convocatoria->pdf);
            $this->deleteFile('imagenes', $convocatoria->imagen);
            $convocatoria->delete();

            return request()->expectsJson()
                ? response()->json(['status' => true, 'message' => 'Convocatoria eliminada exitosamente.'])
                : redirect()->route('comunicacion.index')->with('success', 'Convocatoria eliminada exitosamente.');

        } catch (\Exception $e) {
            return request()->expectsJson()
                ? response()->json(['status' => false, 'message' => 'Error al eliminar la convocatoria.'], 500)
                : redirect()->back()->with('error', 'Error al eliminar la convocatoria.');
        }
    }

    public function cambiarEstado(Request $request, $id)
    {
        $convocatoria = $this->findOwned($id);

        if (!$convocatoria) {
            return response()->json(['status' => false, 'message' => 'Convocatoria no encontrada.'], 404);
        }

        $request->validate([
            'estado' => 'required|in:' . implode(',', $this->estados),
        ]);

        $convocatoria->update(['estado' => $request->estado]);

        return response()->json([
            'status'       => true,
            'message'      => 'Estado actualizado exitosamente.',
            'convocatoria' => $convocatoria,
        ]);
    }

    public function cambiarEstadoWeb($id, $estado)
    {
        if (!in_array($estado, $this->estados)) {
            return redirect()->back()->with('error', 'Estado no válido.');
        }

        Convocatoria::where('user_id', Auth::id())->findOrFail($id)
            ->update(['estado' => $estado]);

        return redirect()->back()->with('success', 'Estado actualizado.');
    }

    public function indexPublic(Request $request)
    {
        $query = Convocatoria::where('estado', 'publicado')
            ->orderBy('created_at', 'desc');

        if ($request->filled('tipo')) {
            $query->where('tipo', $request->tipo);
        }

        if ($request->filled('search')) {
            $query->where('titulo', 'like', "%{$request->search}%");
        }

        $convocatorias = $this->appendUrls($query->get());

        return response()->json([
            'status'        => true,
            'message'       => 'Convocatorias obtenidas exitosamente.',
            'convocatorias' => $convocatorias,
            'total'         => $convocatorias->count(),
        ]);
    }

    public function showPublic($id)
    {
        $convocatoria = Convocatoria::where('estado', 'publicado')->find($id);

        if (!$convocatoria) {
            return response()->json([
                'status'  => false,
                'message' => 'Convocatoria no encontrada o no publicada.',
            ], 404);
        }

        return response()->json([
            'status'       => true,
            'message'      => 'Convocatoria obtenida exitosamente.',
            'convocatoria' => $this->appendUrl($convocatoria),
        ]);
    }

    public function verPdf($id)
    {
        $convocatoria = Convocatoria::findOrFail($id);
        $path = $this->storagePath('pdf', $convocatoria->pdf);

        abort_unless($convocatoria->pdf && file_exists($path), 404);

        return response()->file($path, [
            'Content-Type'        => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $convocatoria->pdf . '"',
        ]);
    }

    public function verPdfWeb($id)
    {
        $convocatoria = Convocatoria::where('user_id', Auth::id())->findOrFail($id);
        $path = $this->storagePath('pdf', $convocatoria->pdf);

        abort_unless($convocatoria->pdf && file_exists($path), 404);

        return response()->file($path, [
            'Content-Type'        => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $convocatoria->pdf . '"',
        ]);
    }

    public function verImagen($id)
    {
        $convocatoria = Convocatoria::findOrFail($id);
        $path = $this->storagePath('imagenes', $convocatoria->imagen);

        abort_unless($convocatoria->imagen && file_exists($path), 404);

        $ext = pathinfo($path, PATHINFO_EXTENSION);

        return response()->file($path, [
            'Content-Type' => 'image/' . ($ext === 'jpg' ? 'jpeg' : $ext),
        ]);
    }

    public function descargarPdf($id)
    {
        $convocatoria = Convocatoria::where('user_id', Auth::id())->findOrFail($id);
        $path = $this->storagePath('pdf', $convocatoria->pdf);

        abort_unless($convocatoria->pdf && file_exists($path), 404);

        return response()->download($path, $convocatoria->titulo . '.pdf');
    }

    private function findOwned($id)
    {
        return Convocatoria::where('user_id', Auth::id())->find($id);
    }

    private function storagePath(string $tipo, ?string $nombre): string
    {
        return storage_path("app/public/convocatorias/{$tipo}/" . $nombre);
    }

    private function ensureDirectories(): void
    {
        foreach (['pdf', 'imagenes'] as $tipo) {
            $path = storage_path("app/public/convocatorias/{$tipo}");
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }
        }
    }

    private function moveFile($file, string $titulo, string $tipo): string
    {
        $slug      = Str::slug($titulo) ?: 'archivo';
        $nombre    = time() . '_' . $slug . '.' . $file->getClientOriginalExtension();
        $file->move(storage_path("app/public/convocatorias/{$tipo}"), $nombre);
        return $nombre;
    }

    private function deleteFile(string $tipo, ?string $nombre): void
    {
        if ($nombre) {
            $path = $this->storagePath($tipo, $nombre);
            if (file_exists($path)) {
                unlink($path);
            }
        }
    }

    private function appendUrl(Convocatoria $convocatoria): Convocatoria
    {
        $convocatoria->pdf_url    = $convocatoria->pdf
            ? asset('storage/convocatorias/pdf/' . $convocatoria->pdf)
            : null;
        $convocatoria->imagen_url = $convocatoria->imagen
            ? asset('storage/convocatorias/imagenes/' . $convocatoria->imagen)
            : null;
        return $convocatoria;
    }

    private function appendUrls($convocatorias)
    {
        return $convocatorias->transform(fn($c) => $this->appendUrl($c));
    }
}