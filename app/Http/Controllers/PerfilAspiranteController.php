<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerfilAspirante;

class PerfilAspiranteController extends Controller
{
    // Obtener perfil del aspirante autenticado
    public function show(Request $request)
    {
        return $request->user()->perfilAspirante;
    }

    // Actualizar perfil del aspirante
    public function update(Request $request)
    {
        $data = $request->validate([
            'genero' => 'required|string',
            'habla_lengua_indigena' => 'required|boolean',
            'lengua_indigena' => 'nullable|string',
            'institucion_procedencia' => 'nullable|string',
            'municipio' => 'nullable|string',
            'estado' => 'nullable|string',
            'tiene_discapacidad' => 'required|boolean',
            'discapacidad' => 'nullable|string',
        ]);

        $perfil = $request->user()->perfilAspirante;
        $perfil->update($data);

        return response()->json(['message' => 'Perfil actualizado correctamente', 'perfil' => $perfil]);
    }
}
