<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CarreraController extends Controller
{
    use AuthorizesRequests;

    // 🔹 Web: Obtener todas las carreras con su director
    public function index()
    {
        $carreras = Carrera::all(); // O paginación si prefieres
        return view('admin.carreras.index', compact('carreras'));
    }

    // 🔹 Web: Mostrar una carrera
    public function show($id)
    {
        try {
            $carrera = Carrera::with('director:id,name,email')->findOrFail($id);
            $this->authorize('view', $carrera);
            return view('admin.carreras.show', compact('carrera'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('superadmin.carreras.index')->with('error', 'Carrera no encontrada.');
        }
    }

    // 🔹 Web: Crear carrera
    public function store(Request $request)
    {
        $this->authorize('create', Carrera::class);

        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'plan_estudios_url' => 'nullable|url',
            'director_id' => [
                'required',
                Rule::exists('users', 'id')->where('role', 'director'),
            ],
        ]);

        $carrera = Carrera::create($request->only('nombre', 'descripcion', 'plan_estudios_url', 'director_id'));

        // Redirigir a la lista de carreras con un mensaje de éxito
        return redirect()->route('superadmin.carreras.index')->with('message', 'Carrera registrada exitosamente');
    }

    // 🔹 Web: Mostrar formulario para crear carrera
    public function create()
    {
        $this->authorize('create', Carrera::class);

        $directores = User::where('role', 'director')->get();
        return view('admin.carreras.registrar_carrera', compact('directores'));
    }

    // 🔹 Web: Guardar carrera desde formulario
    public function storeWeb(Request $request)
    {
        $this->authorize('create', Carrera::class);

        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'plan_estudios_url' => 'nullable|url',
            'director_id' => [
                'required',
                Rule::exists('users', 'id')->where('role', 'director'),
            ],
        ]);

        Carrera::create($request->only('nombre', 'descripcion', 'plan_estudios_url', 'director_id'));

        // Redirigir a la página anterior con mensaje de éxito
        return redirect()->back()->with('message', 'Carrera registrada exitosamente');
    }

    // 🔹 Actualizar carrera
    public function update(Request $request, Carrera $carrera)
    {
        $this->authorize('update', $carrera); // Asegura que tenga permiso (revisa tu policy)

        $validated = $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'plan_estudios_url' => 'nullable|url',
            'coordinador' => 'nullable|string',
            'duracion' => 'nullable|string',
            'modalidad' => 'nullable|string',
            'perfil_ingreso' => 'nullable|string',
            'perfil_egreso' => 'nullable|string',
            'areas_especializacion' => 'nullable|string',
            'campo_profesional' => 'nullable|string',
            'testimonios' => 'nullable|string',
            'director_id' => [
                'required',
                Rule::exists('users', 'id')->where('role', 'director'),
            ],
        ]);

        $carrera->update($validated);

        // Redirigir con mensaje de éxito
        return redirect()->route('superadmin.carreras.index')->with('success', 'Carrera actualizada correctamente');
    }

    // 🔹 Eliminar carrera
    public function destroy($id)
    {
        try {
            $carrera = Carrera::findOrFail($id);
            $this->authorize('delete', $carrera);
            $carrera->delete();

            // Redirigir con mensaje de éxito
            return redirect()->route('superadmin.carreras.index')->with('success', 'Carrera eliminada correctamente');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Redirigir con mensaje de error
            return redirect()->route('superadmin.carreras.index')->with('error', 'Carrera no encontrada.');
        }
    }

    // 🔹 Mostrar formulario de edición de carrera
    public function edit(Carrera $carrera)
    {
        $this->authorize('update', $carrera);
        $directores = User::where('role', 'director')->get();
        return view('admin.carreras.edit', compact('carrera', 'directores'));
    }

    // 🔹 Obtener todas las carreras en JSON con su director (opcional si es necesario para la API)
    public function apiIndex()
    {
        return response()->json([
            'status' => true,
            'carreras' => Carrera::all()
        ]);
    }

    // 🔹 Mostrar carrera sin protección
    public function apiShowPublic($id)
    {
        try {
            $carrera = Carrera::with('director:id,name,email')->findOrFail($id);
            return response()->json(['status' => true, 'carrera' => $carrera]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['status' => false, 'message' => 'Carrera no encontrada.'], 404);
        }
    }
}
