<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrera;

class FavoritoController extends Controller
{
    // Obtener las carreras favoritas del usuario autenticado
    public function index(Request $request)
    {
        return $request->user()->favoritos()->with('director')->get();
    }

    // Marcar una carrera como favorita
    public function store(Request $request)
    {
        $request->validate([
            'carrera_id' => 'required|exists:carreras,id',
        ]);

        $user = $request->user();
        $user->favoritos()->syncWithoutDetaching([$request->carrera_id]);

        return response()->json(['message' => 'Carrera agregada a favoritos']);
    }

    // Eliminar una carrera de favoritos
    public function destroy(Request $request, $id)
    {
        $user = $request->user();
        $user->favoritos()->detach($id);

        return response()->json(['message' => 'Carrera eliminada de favoritos']);
    }
}
