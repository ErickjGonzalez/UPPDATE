<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CarreraController extends Controller
{
    use AuthorizesRequests;

    private function directorValidationRule(): array
    {
        return ['required', Rule::exists('users', 'id')->where('role', 'director')];
    }

    public function index()
    {
        $carreras = Carrera::all();
        return view('admin.carreras.index', compact('carreras'));
    }

    public function create()
    {
        $this->authorize('create', Carrera::class);

        $directores = User::where('role', 'director')->get();
        return view('admin.carreras.registrar_carrera', compact('directores'));
    }

    public function store(Request $request)
    {
        $this->authorize('create', Carrera::class);

        $validated = $request->validate([
            'nombre'           => 'required|string',
            'descripcion'      => 'required|string',
            'plan_estudios_url'=> 'nullable|url',
            'director_id'      => $this->directorValidationRule(),
        ]);

        Carrera::create($validated);

        return redirect()->route('superadmin.carreras.index')
            ->with('message', 'Carrera registrada exitosamente.');
    }

    public function show($id)
    {
        $carrera = Carrera::with('director:id,name,email')->findOrFail($id);
        $this->authorize('view', $carrera);

        return view('admin.carreras.show', compact('carrera'));
    }

    public function edit(Carrera $carrera)
    {
        $this->authorize('update', $carrera);

        $directores = User::where('role', 'director')->get();
        return view('admin.carreras.edit', compact('carrera', 'directores'));
    }

    public function update(Request $request, Carrera $carrera)
    {
        $this->authorize('update', $carrera);

        $validated = $request->validate([
            'nombre'                => 'required|string',
            'descripcion'           => 'required|string',
            'plan_estudios_url'     => 'nullable|url',
            'coordinador'           => 'nullable|string',
            'duracion'              => 'nullable|string',
            'modalidad'             => 'nullable|string',
            'perfil_ingreso'        => 'nullable|string',
            'perfil_egreso'         => 'nullable|string',
            'areas_especializacion' => 'nullable|string',
            'campo_profesional'     => 'nullable|string',
            'testimonios'           => 'nullable|string',
            'director_id'           => $this->directorValidationRule(),
        ]);

        $carrera->update($validated);

        return redirect()->route('superadmin.carreras.index')
            ->with('success', 'Carrera actualizada correctamente.');
    }

    public function destroy($id)
    {
        $carrera = Carrera::findOrFail($id);
        $this->authorize('delete', $carrera);
        $carrera->delete();

        return redirect()->route('superadmin.carreras.index')
            ->with('success', 'Carrera eliminada correctamente.');
    }

    public function apiIndex()
    {
        return response()->json([
            'status'   => true,
            'carreras' => Carrera::all(),
        ]);
    }

    public function apiShowPublic($id)
    {
        $carrera = Carrera::with('director:id,name,email')->find($id);

        if (!$carrera) {
            return response()->json(['status' => false, 'message' => 'Carrera no encontrada.'], 404);
        }

        return response()->json(['status' => true, 'carrera' => $carrera]);
    }
}