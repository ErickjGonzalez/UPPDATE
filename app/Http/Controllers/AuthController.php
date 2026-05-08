<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PerfilAspirante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    // Constantes para roles
    private const ROLES = [
        'aspirante' => 'aspirante',
        'director' => 'director',
        'rector' => 'rector',
        'super_admin' => 'super_admin',
        'comunicacion' => 'comunicacion', // Nuevo rol añadido
    ];
    
    // Constantes para géneros (si aplica)
    private const GENEROS = ['masculino', 'femenino', 'otro'];
    
    /**
     * Registro de usuarios (solo aspirantes desde app)
     */
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email:rfc,dns|max:255|unique:users,email',
            'password' => 'required|string|confirmed|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            
            // Campos extra para aspirantes
            'genero' => ['required', 'string', Rule::in(self::GENEROS)],
            'habla_lengua_indigena' => 'required|boolean',
            'lengua_indigena' => 'nullable|string|max:100|required_if:habla_lengua_indigena,true',
            'institucion_procedencia' => 'nullable|string|max:200',
            'municipio' => 'nullable|string|max:100',
            'estado' => 'nullable|string|max:100',
            'tiene_discapacidad' => 'required|boolean',
            'discapacidad' => 'nullable|string|max:200|required_if:tiene_discapacidad,true',
        ], [
            'password.regex' => 'La contraseña debe contener al menos una letra mayúscula, una minúscula y un número.',
            'lengua_indigena.required_if' => 'El campo lengua indígena es requerido cuando habla lengua indígena es verdadero.',
            'discapacidad.required_if' => 'El campo discapacidad es requerido cuando tiene discapacidad es verdadero.',
        ]);

        DB::beginTransaction();
        
        try {
            $user = User::create([
                'name' => $validated['name'],
                'username' => $validated['username'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'role' => self::ROLES['aspirante'],
            ]);

            PerfilAspirante::create([
                'user_id' => $user->id,
                'genero' => $validated['genero'],
                'habla_lengua_indigena' => $validated['habla_lengua_indigena'],
                'lengua_indigena' => $validated['lengua_indigena'] ?? null,
                'institucion_procedencia' => $validated['institucion_procedencia'] ?? null,
                'municipio' => $validated['municipio'] ?? null,
                'estado' => $validated['estado'] ?? null,
                'tiene_discapacidad' => $validated['tiene_discapacidad'],
                'discapacidad' => $validated['discapacidad'] ?? null,
            ]);

            DB::commit();

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'status' => true,
                'message' => 'Aspirante registrado correctamente.',
                'token' => $token,
                'user' => $user->load('perfilAspirante')
            ], 201);
            
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error en registro de aspirante: ' . $e->getMessage());
            
            return response()->json([
                'status' => false,
                'message' => 'Error en el registro. Por favor, intente nuevamente.'
            ], 500);
        }
    }

    /**
     * Login de usuarios
     */
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $validated['email'])->first();

        if (!$user || !Hash::check($validated['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Las credenciales son incorrectas.'],
            ]);
        }

        // Opcional: eliminar tokens anteriores para un solo dispositivo
        if (config('auth.single_device_login', false)) {
            $user->tokens()->delete();
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'status' => true,
            'message' => 'Inicio de sesión exitoso.',
            'token' => $token,
            'user' => $user->loadMissing(['perfilAspirante'])
        ]);
    }

    /**
     * Cierre de sesión
     */
    public function logout(Request $request)
    {
        try {
            $request->user()->currentAccessToken()->delete();
            
            return response()->json([
                'status' => true,
                'message' => 'Sesión cerrada correctamente.'
            ]);
            
        } catch (\Exception $e) {
            Log::error('Error en logout: ' . $e->getMessage());
            
            return response()->json([
                'status' => false,
                'message' => 'Error al cerrar sesión.'
            ], 500);
        }
    }

    /**
 * Registrar usuario desde la web (formulario)
 * Este método es específico para el formulario web
 */
public function registerByRoleFromWeb(Request $request)
{
    $request->validate([
        'role' => ['required', Rule::in(self::ROLES)],
    ]);

    // Usar el método registerByRole pero pasar el rol desde el formulario
    return $this->registerByRole($request, $request->role);
}

    /**
     * Registrar un director
     */
    public function registerDirector(Request $request)
    {
        return $this->registerByRole($request, self::ROLES['director']);
    }

    /**
     * Registrar un super_admin
     */
    public function registerSuperAdmin(Request $request)
    {
        return $this->registerByRole($request, self::ROLES['super_admin']);
    }

    /**
     * Registrar un rector
     */
    public function registerRector(Request $request)
    {
        return $this->registerByRole($request, self::ROLES['rector']);
    }

    /**
     * Registrar un aspirante (opcional si quieres por separado)
     */
    public function registerAspirante(Request $request)
    {
        return $this->registerByRole($request, self::ROLES['aspirante']);
    }

    /**
     * Registrar un usuario de comunicación
     */
    public function registerComunicacion(Request $request)
    {
        return $this->registerByRole($request, self::ROLES['comunicacion']);
    }

    /**
     * Método reutilizable para registrar por rol
     */
    private function registerByRole(Request $request, string $role)
    {
        // Validación común para todos los roles
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email:rfc,dns|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'telefono' => 'nullable|string|regex:/^[\d\s\-\+\(\)]{10,15}$/',
            'curp' => ['nullable', 'string', 'regex:/^[A-Z]{4}\d{6}[HM][A-Z]{5}[A-Z0-9]{2}$/'],
            
            // Campos específicos para aspirantes
            'genero' => ['nullable', 'string', Rule::in(self::GENEROS), 'required_if:role,aspirante'],
            'habla_lengua_indigena' => 'nullable|boolean|required_if:role,aspirante',
            'lengua_indigena' => 'nullable|string|max:100|required_if:habla_lengua_indigena,true',
            'institucion_procedencia' => 'nullable|string|max:200',
            'municipio' => 'nullable|string|max:100',
            'estado' => 'nullable|string|max:100',
            'tiene_discapacidad' => 'nullable|boolean|required_if:role,aspirante',
            'discapacidad' => 'nullable|string|max:200|required_if:tiene_discapacidad,true',
        ], [
            'password.regex' => 'La contraseña debe contener al menos una letra mayúscula, una minúscula y un número.',
            'telefono.regex' => 'El formato del teléfono no es válido.',
            'curp.regex' => 'El formato de la CURP no es válido.',
            'genero.required_if' => 'El género es requerido para aspirantes.',
            'habla_lengua_indigena.required_if' => 'El campo "habla lengua indígena" es requerido para aspirantes.',
            'tiene_discapacidad.required_if' => 'El campo "tiene discapacidad" es requerido para aspirantes.',
        ]);

        try {
            $user = User::create([
                'name' => $validated['name'],
                'username' => $validated['username'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'role' => $role,
                'telefono' => $validated['telefono'] ?? null,
                'curp' => $validated['curp'] ?? null,
            ]);

            // Si es un aspirante, también crear su perfil
            if ($role === self::ROLES['aspirante']) {
                PerfilAspirante::create([
                    'user_id' => $user->id,
                    'genero' => $validated['genero'],
                    'habla_lengua_indigena' => $validated['habla_lengua_indigena'],
                    'lengua_indigena' => $validated['lengua_indigena'] ?? null,
                    'institucion_procedencia' => $validated['institucion_procedencia'] ?? null,
                    'municipio' => $validated['municipio'] ?? null,
                    'estado' => $validated['estado'] ?? null,
                    'tiene_discapacidad' => $validated['tiene_discapacidad'],
                    'discapacidad' => $validated['discapacidad'] ?? null,
                ]);
            }

            // Para API devuelve JSON, para web redirige
            if ($request->expectsJson()) {
                $token = $user->createToken('auth_token')->plainTextToken;
                
                return response()->json([
                    'status' => true,
                    'message' => 'Usuario registrado exitosamente',
                    'user' => $user
                ], 201);
            }

            return redirect()->route('admin.usuarios')
                ->with('success', 'Usuario registrado exitosamente');

        } catch (\Exception $e) {
            Log::error("Error en registro de {$role}: " . $e->getMessage());
            
            if ($request->expectsJson()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Error en el registro del usuario.'
                ], 500);
            }

            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Error en el registro del usuario.']);
        }
    }

    /**
     * Mostrar formulario de edición
     */
    public function edit($id)
    {
        $usuario = User::with('perfilAspirante')->findOrFail($id);

        return view('admin.editarusuario', compact('usuario'));
    }

    /**
     * Actualizar usuario
     */
    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $usuario->id,
            'email' => 'required|email:rfc,dns|max:255|unique:users,email,' . $usuario->id,
            'telefono' => 'nullable|string|regex:/^[\d\s\-\+\(\)]{10,15}$/',
            'curp' => ['nullable', 'string', 'regex:/^[A-Z]{4}\d{6}[HM][A-Z]{5}[A-Z0-9]{2}$/'],
            'role' => ['required', Rule::in(self::ROLES)],
            
            // Campos para perfil de aspirante
            'genero' => ['nullable', 'string', Rule::in(self::GENEROS), 'required_if:role,aspirante'],
            'habla_lengua_indigena' => 'nullable|boolean|required_if:role,aspirante',
            'lengua_indigena' => 'nullable|string|max:100|required_if:habla_lengua_indigena,true',
            'institucion_procedencia' => 'nullable|string|max:200',
            'municipio' => 'nullable|string|max:100',
            'estado' => 'nullable|string|max:100',
            'tiene_discapacidad' => 'nullable|boolean|required_if:role,aspirante',
            'discapacidad' => 'nullable|string|max:200|required_if:tiene_discapacidad,true',
        ], [
            'telefono.regex' => 'El formato del teléfono no es válido.',
            'curp.regex' => 'El formato de la CURP no es válido.',
            'role.in' => 'El rol seleccionado no es válido.',
            'genero.required_if' => 'El género es requerido para aspirantes.',
            'habla_lengua_indigena.required_if' => 'El campo "habla lengua indígena" es requerido para aspirantes.',
            'tiene_discapacidad.required_if' => 'El campo "tiene discapacidad" es requerido para aspirantes.',
        ]);

        try {
            DB::transaction(function () use ($usuario, $validated) {
                // Actualizar usuario
                $usuario->update([
                    'name' => $validated['name'],
                    'username' => $validated['username'],
                    'email' => $validated['email'],
                    'telefono' => $validated['telefono'] ?? null,
                    'curp' => $validated['curp'] ?? null,
                    'role' => $validated['role'],
                ]);
                
                // Manejar perfil de aspirante
                if ($validated['role'] === self::ROLES['aspirante']) {
                    if ($usuario->perfilAspirante) {
                        // Actualizar perfil existente
                        $usuario->perfilAspirante->update([
                            'genero' => $validated['genero'],
                            'habla_lengua_indigena' => $validated['habla_lengua_indigena'],
                            'lengua_indigena' => $validated['lengua_indigena'] ?? null,
                            'institucion_procedencia' => $validated['institucion_procedencia'] ?? null,
                            'municipio' => $validated['municipio'] ?? null,
                            'estado' => $validated['estado'] ?? null,
                            'tiene_discapacidad' => $validated['tiene_discapacidad'],
                            'discapacidad' => $validated['discapacidad'] ?? null,
                        ]);
                    } else {
                        // Crear nuevo perfil
                        PerfilAspirante::create([
                            'user_id' => $usuario->id,
                            'genero' => $validated['genero'],
                            'habla_lengua_indigena' => $validated['habla_lengua_indigena'],
                            'lengua_indigena' => $validated['lengua_indigena'] ?? null,
                            'institucion_procedencia' => $validated['institucion_procedencia'] ?? null,
                            'municipio' => $validated['municipio'] ?? null,
                            'estado' => $validated['estado'] ?? null,
                            'tiene_discapacidad' => $validated['tiene_discapacidad'],
                            'discapacidad' => $validated['discapacidad'] ?? null,
                        ]);
                    }
                } elseif ($usuario->perfilAspirante) {
                    // Si cambia de aspirante a otro rol, eliminar el perfil
                    $usuario->perfilAspirante->delete();
                }
            });

            return redirect()->route('admin.listausuario')
                ->with('success', 'Usuario actualizado correctamente.');
                
        } catch (\Exception $e) {
            Log::error('Error al actualizar usuario: ' . $e->getMessage());
            
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Error al actualizar el usuario.']);
        }
    }
}