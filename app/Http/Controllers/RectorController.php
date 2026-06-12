<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\EventoConvocatoria;
use App\Models\User;
use App\Notifications\NuevaConvocatoriaNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class RectorController extends Controller
{
    public function index()
    {
        $eventosConvocatorias = EventoConvocatoria::where('creador_id', Auth::id())->get();
        return view('rector.convocatorias.liscon', compact('eventosConvocatorias'));
    }

    public function create()
    {
        return view('rector.convocatorias.createcon');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo'       => 'required|string|max:255',
            'descripcion'  => 'required|string',
            'fecha_inicio' => 'required|date',
            'fecha_fin'    => 'required|date|after_or_equal:fecha_inicio',
            'tipo'         => 'required|in:evento,convocatoria',
        ]);

        $eventoConvocatoria = EventoConvocatoria::create([
            'titulo'       => $request->titulo,
            'descripcion'  => $request->descripcion,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin'    => $request->fecha_fin,
            'tipo'         => $request->tipo,
            'creador_id'   => Auth::id(),
        ]);

        $usersToNotify = User::where('id', '!=', Auth::id())->get();
        Notification::send($usersToNotify, new NuevaConvocatoriaNotification($eventoConvocatoria));

        return response()->json([
            'message' => 'Convocatoria/Evento creado con éxito.',
            'data'    => $eventoConvocatoria,
        ], 201);
    }

    public function edit($id)
    {
        $eventoConvocatoria = EventoConvocatoria::findOrFail($id);
        return view('rector.convocatorias.editcon', compact('eventoConvocatoria'));
    }

    public function update(Request $request, $id)
    {
        $eventoConvocatoria = EventoConvocatoria::findOrFail($id);

        $request->validate([
            'titulo'       => 'required|string|max:255',
            'descripcion'  => 'required|string',
            'fecha_inicio' => 'required|date',
            'fecha_fin'    => 'required|date|after_or_equal:fecha_inicio',
            'tipo'         => 'required|in:evento,convocatoria',
        ]);

        $eventoConvocatoria->update(
            $request->only('titulo', 'descripcion', 'fecha_inicio', 'fecha_fin', 'tipo')
        );

        return redirect()->route('rector.convocatorias.index')
            ->with('success', 'Convocatoria/Evento actualizado con éxito.');
    }

    public function destroy($id)
    {
        EventoConvocatoria::findOrFail($id)->delete();

        return redirect()->route('rector.convocatorias.index')
            ->with('success', 'Convocatoria/Evento eliminado con éxito.');
    }

    public function obtenerConvocatoriasPublicas()
    {
        return response()->json(EventoConvocatoria::all());
    }

    public function carreras()
    {
        $carreras = Carrera::all();
        return view('rector.carreras', compact('carreras'));
    }
}