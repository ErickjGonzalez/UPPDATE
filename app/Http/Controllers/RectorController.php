<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\EventoConvocatoria;
use App\Models\User; // Importar el modelo User
use App\Notifications\NuevaConvocatoriaNotification; // Importar la notificación
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification; // Importar el Facade de Notificación

use Illuminate\Support\Facades\DB;

class RectorController extends Controller
{
    // Método para mostrar el formulario de crear convocatoria
    public function create()
    {
        return view('rector.convocatorias.createcon'); // Cambio de "create" a "createcon"
    }

    // Método para agregar una nueva convocatoria o evento
    public function store(Request $request)
    {
        if (Auth::user()->role != 'rector') {
            return response()->json(['message' => 'No autorizado'], 403);
        }

        // Validación de los datos de entrada
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
            'tipo' => 'required|in:evento,convocatoria',
        ]);

        // Crear un nuevo evento/convocatoria
        $eventoConvocatoria = EventoConvocatoria::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
            'tipo' => $request->tipo,
            'creador_id' => Auth::id(), // ID del rector que lo crea
        ]);

        // --- Envío de notificación ---
        // Obtener todos los usuarios a los que se les notificará (excepto el rector que la creó)
        $usersToNotify = User::where('id', '!=', Auth::id())->get();

        // Enviar la notificación a los usuarios
        Notification::send($usersToNotify, new NuevaConvocatoriaNotification($eventoConvocatoria));

        // Devolver una respuesta JSON para la API
        return response()->json(['message' => 'Convocatoria/Evento creado con éxito.', 'data' => $eventoConvocatoria], 201);
    }

    // Método para mostrar el listado de convocatorias
    public function index()
    {
        $eventosConvocatorias = EventoConvocatoria::where('creador_id', Auth::id())->get();
        return view('rector.convocatorias.liscon', compact('eventosConvocatorias')); // Cambio de "index" a "liscon"
    }

    // Método para editar una convocatoria o evento
    public function edit($id)
    {
        $eventoConvocatoria = EventoConvocatoria::findOrFail($id);
        return view('rector.convocatorias.editcon', compact('eventoConvocatoria')); // Cambio de "edit" a "editcon"
    }

    // Método para actualizar una convocatoria o evento
    public function update(Request $request, $id)
    {
        $eventoConvocatoria = EventoConvocatoria::findOrFail($id);
        
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
            'tipo' => 'required|in:evento,convocatoria',
        ]);

        // Actualizar la convocatoria
        $eventoConvocatoria->update($request->only('titulo', 'descripcion', 'fecha_inicio', 'fecha_fin', 'tipo'));

        return redirect()->route('rector.convocatorias.index')->with('success', 'Convocatoria/Evento actualizado con éxito');
    }

    // Método para eliminar una convocatoria o evento
    public function destroy($id)
    {
        $eventoConvocatoria = EventoConvocatoria::findOrFail($id);
        $eventoConvocatoria->delete();
        
        return redirect()->route('rector.convocatorias.index')->with('success', 'Convocatoria/Evento eliminado con éxito');
    }
public function obtenerConvocatoriasPublicas()
{
    // Obtener todas las convocatorias (sin importar quién las creó)
    $eventosConvocatorias = EventoConvocatoria::all();

    // Retornar las convocatorias en formato JSON
    return response()->json($eventosConvocatorias);
}

public function carreras()
{
    // Obtener todas las carreras (esto puede ser ajustado dependiendo de tu lógica de negocio)
    $carreras = Carrera::all();  // Aquí puedes agregar condiciones si lo necesitas

    // Retorna la vista de carreras, pasando las carreras obtenidas
    return view('rector.carreras', compact('carreras'));
}
}
