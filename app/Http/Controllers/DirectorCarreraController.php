<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Carrera;

class DirectorCarreraController extends Controller
{
    public function edit()
    {
        // Se obtiene la carrera por director_id manualmente para asegurar que esté actualizada
        $carrera = Carrera::where('director_id', Auth::id())->first();

        if (!$carrera) {
            abort(403, 'No tienes una carrera asignada.');
        }

        return view('director.carrera.edit', compact('carrera'));
    }

    public function update(Request $request)
    {
        try {
            // Se obtiene la carrera del director
            $carrera = Carrera::where('director_id', Auth::id())->firstOrFail();

            // Validación
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
            ]);

            // ACTUALIZACIÓN DE DATOS
            $carrera->update($validated);

            return redirect()->route('director.carrera.edit')->with('success', 'Información de la carrera actualizada correctamente.');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->back()->withErrors(['error' => 'No tienes una carrera asignada para editar.']);
        }
    }
}
