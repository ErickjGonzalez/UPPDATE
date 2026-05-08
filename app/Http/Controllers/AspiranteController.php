<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Aspirante;

class AspiranteController extends Controller
{
    public function login(Request $request)
{
    $request->validate([
        'usuario' => 'required|string',
        'password' => 'required|string',
    ]);

    $aspirante = Aspirante::where('usuario', $request->usuario)->first();

    if (!$aspirante || !Hash::check($request->password, $aspirante->password)) {
        return response()->json([
            'status' => 'error',
            'message' => 'Usuario o contraseña incorrectos'
        ], 401);
    }

    return response()->json([
        'status' => 'success',
        'message' => 'Login exitoso',
        'aspirante' => [
            'id' => $aspirante->id,
            'nombre_completo' => $aspirante->nombre_completo,
            'usuario' => $aspirante->usuario,
            'correo' => $aspirante->correo,
            // agrega más campos si necesitas
        ]
    ], 200);
}


    public function register(Request $request)
    {
        $request->headers->set('Accept', 'application/json');
        $messages = [
            'fecha_nacimiento.required' => 'La fecha de nacimiento es obligatoria.',
            'fecha_nacimiento.date_format' => 'La fecha de nacimiento debe tener el formato DD/MM/AAAA (ejemplo: 09/01/2004).',
            'nombre_completo.required' => 'El nombre completo es obligatorio.',
            'curp.required' => 'La CURP es obligatoria.',
            'curp.unique' => 'La CURP ya está registrada.',
            'correo.required' => 'El correo es obligatorio.',
            'correo.email' => 'El correo debe ser una dirección válida.',
            'correo.unique' => 'El correo ya está registrado.',
            'usuario.required' => 'El usuario es obligatorio.',
            'usuario.unique' => 'El usuario ya está en uso.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos 6 caracteres.',
            // Agrega mensajes para los demás campos si quieres
        ];

        $validated = $request->validate([
            'nombre_completo' => 'required|string|max:255',
            'curp' => 'required|string|max:18|unique:aspirantes,curp',
            'fecha_nacimiento' => 'required|date_format:d/m/Y',
            'telefono' => 'required|string|max:20',

            'genero' => 'nullable|string|max:50',
            'genero_otro' => 'nullable|string|max:50',

            'escuela_procedencia' => 'nullable|string|max:255',
            'municipio' => 'nullable|string|max:255',
            'estado' => 'nullable|string|max:255',
            'lengua_indigena' => 'nullable|string|max:255',

            'discapacidad_visual' => 'nullable|boolean',
            'discapacidad_auditiva' => 'nullable|boolean',
            'discapacidad_motriz' => 'nullable|boolean',
            'discapacidad_otra' => 'nullable|boolean',

            'discapacidad_otra_texto' => 'nullable|string|max:255',

            'correo' => 'required|email|unique:aspirantes,correo',
            'usuario' => 'required|string|max:255|unique:aspirantes,usuario',
            'password' => 'required|string|min:6',
        ], $messages);

        // Convertir fecha de nacimiento a formato Y-m-d para la BD
        $fechaNacimiento = \DateTime::createFromFormat('d/m/Y', $validated['fecha_nacimiento']);
        if (!$fechaNacimiento) {
            return response()->json([
                'status' => 'error',
                'message' => 'Fecha de nacimiento no válida'
            ], 422);
        }

        $aspirante = new Aspirante();
        $aspirante->nombre_completo = $validated['nombre_completo'];
        $aspirante->curp = $validated['curp'];
        $aspirante->fecha_nacimiento = $fechaNacimiento->format('Y-m-d');
        $aspirante->telefono = $validated['telefono'];
        $aspirante->genero = $validated['genero'] ?? null;
        $aspirante->genero_otro = $validated['genero_otro'] ?? null;
        $aspirante->escuela_procedencia = $validated['escuela_procedencia'] ?? null;
        $aspirante->municipio = $validated['municipio'] ?? null;
        $aspirante->estado = $validated['estado'] ?? null;
        $aspirante->lengua_indigena = $validated['lengua_indigena'] ?? null;

        $aspirante->discapacidad_visual = $validated['discapacidad_visual'] ?? false;
        $aspirante->discapacidad_auditiva = $validated['discapacidad_auditiva'] ?? false;
        $aspirante->discapacidad_motriz = $validated['discapacidad_motriz'] ?? false;
        $aspirante->discapacidad_otra = $validated['discapacidad_otra'] ?? false;
        $aspirante->discapacidad_otra_texto = $validated['discapacidad_otra_texto'] ?? null;

        $aspirante->correo = $validated['correo'];
        $aspirante->usuario = $validated['usuario'];
        $aspirante->password = Hash::make($validated['password']);

        $aspirante->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Registro exitoso',
            'aspirante_id' => $aspirante->id
        ], 201);
    }

// Ruta pública para la actualización de aspirantes
public function update(Request $request, $id)
{
    // Validar la entrada (mantener la validación)
    $request->validate([
        'nombre_completo' => 'required|string|max:255',
        'correo' => 'required|email|unique:aspirantes,correo,' . $id,
        'telefono' => 'required|string|max:20',
        'fecha_nacimiento' => 'required|date_format:d/m/Y',
        // Otros campos que deseas actualizar
    ]);

    // Buscar al aspirante por su ID
    $aspirante = Aspirante::find($id);

    if (!$aspirante) {
        return response()->json([
            'status' => 'error',
            'message' => 'Usuario no encontrado'
        ], 404);
    }

    // Actualizar los datos del aspirante
    $aspirante->nombre_completo = $request->nombre_completo;
    $aspirante->correo = $request->correo;
    $aspirante->telefono = $request->telefono;
    
    // Convertir fecha de nacimiento a formato Y-m-d
    $fechaNacimiento = \DateTime::createFromFormat('d/m/Y', $request->fecha_nacimiento);
    if ($fechaNacimiento) {
        $aspirante->fecha_nacimiento = $fechaNacimiento->format('Y-m-d');
    }

    // Actualizar otros campos si es necesario
    $aspirante->genero = $request->genero ?? $aspirante->genero;
    $aspirante->genero_otro = $request->genero_otro ?? $aspirante->genero_otro;
    $aspirante->escuela_procedencia = $request->escuela_procedencia ?? $aspirante->escuela_procedencia;
    $aspirante->municipio = $request->municipio ?? $aspirante->municipio;
    $aspirante->estado = $request->estado ?? $aspirante->estado;
    $aspirante->lengua_indigena = $request->lengua_indigena ?? $aspirante->lengua_indigena;

    // Guardar los cambios en la base de datos
    $aspirante->save();

    return response()->json([
        'status' => 'success',
        'message' => 'Datos actualizados correctamente',
        'aspirante' => $aspirante
    ], 200);
}


public function show($id)
{
    $aspirante = Aspirante::find($id);

    if (!$aspirante) {
        return response()->json([
            'status' => 'error',
            'message' => 'Aspirante no encontrado'
        ], 404);
    }

    return response()->json([
        'status' => 'success',
        'aspirante' => $aspirante
    ], 200);
}

 public function apiShowPublic($id)
    {
        // Buscar al aspirante por su ID
        $aspirante = Aspirante::find($id);

        // Si no se encuentra el aspirante, retornar error
        if (!$aspirante) {
            return response()->json([
                'status' => 'error',
                'message' => 'Aspirante no encontrado'
            ], 404);
        }

        // Si se encuentra el aspirante, retornar los datos en formato JSON
        return response()->json([
            'status' => 'success',
            'aspirante' => $aspirante
        ], 200);
    }


}

