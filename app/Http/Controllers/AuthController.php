<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    private const ROLES = [
        'director'    => 'director',
        'rector'      => 'rector',
        'super_admin' => 'super_admin',
        'comunicacion'=> 'comunicacion',
    ];

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $validated['email'])->first();

        if (!$user || !Hash::check($validated['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Las credenciales son incorrectas.'],
            ]);
        }

        if (config('auth.single_device_login', false)) {
            $user->tokens()->delete();
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'status'  => true,
            'message' => 'Inicio de sesión exitoso.',
            'token'   => $token,
            'user'    => $user,
        ]);
    }

    public function logout(Request $request)
    {
        try {
            $request->user()->currentAccessToken()->delete();

            return response()->json([
                'status'  => true,
                'message' => 'Sesión cerrada correctamente.',
            ]);
        } catch (\Exception $e) {
            Log::error('Error en logout: ' . $e->getMessage());

            return response()->json([
                'status'  => false,
                'message' => 'Error al cerrar sesión.',
            ], 500);
        }
    }

    public function registerDirector(Request $request)
    {
        return $this->registerByRole($request, self::ROLES['director']);
    }

    public function registerSuperAdmin(Request $request)
    {
        return $this->registerByRole($request, self::ROLES['super_admin']);
    }

    public function registerRector(Request $request)
    {
        return $this->registerByRole($request, self::ROLES['rector']);
    }

    public function registerComunicacion(Request $request)
    {
        return $this->registerByRole($request, self::ROLES['comunicacion']);
    }

    public function registerByRoleFromWeb(Request $request)
    {
        $request->validate([
            'role' => ['required', Rule::in(self::ROLES)],
        ]);

        return $this->registerByRole($request, $request->role);
    }

    private function registerByRole(Request $request, string $role)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email'    => 'required|email:rfc,dns|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'telefono' => 'nullable|string|regex:/^[\d\s\-\+\(\)]{10,15}$/',
            'curp'     => ['nullable', 'string', 'regex:/^[A-Z]{4}\d{6}[HM][A-Z]{5}[A-Z0-9]{2}$/'],
        ], [
            'password.regex' => 'La contraseña debe contener al menos una letra mayúscula, una minúscula y un número.',
            'telefono.regex' => 'El formato del teléfono no es válido.',
            'curp.regex'     => 'El formato de la CURP no es válido.',
        ]);

        try {
            $user = User::create([
                'name'     => $validated['name'],
                'username' => $validated['username'],
                'email'    => $validated['email'],
                'password' => Hash::make($validated['password']),
                'role'     => $role,
                'telefono' => $validated['telefono'] ?? null,
                'curp'     => $validated['curp'] ?? null,
            ]);

            if ($request->expectsJson()) {
                return response()->json([
                    'status'  => true,
                    'message' => 'Usuario registrado exitosamente.',
                    'user'    => $user,
                ], 201);
            }

            return redirect()->route('admin.usuarios')
                ->with('success', 'Usuario registrado exitosamente.');

        } catch (\Exception $e) {
            Log::error("Error en registro de {$role}: " . $e->getMessage());

            if ($request->expectsJson()) {
                return response()->json([
                    'status'  => false,
                    'message' => 'Error en el registro del usuario.',
                ], 500);
            }

            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Error en el registro del usuario.']);
        }
    }

    public function edit($id)
    {
        $usuario = User::findOrFail($id);

        return view('admin.editarusuario', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);

        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $usuario->id,
            'email'    => 'required|email:rfc,dns|max:255|unique:users,email,' . $usuario->id,
            'telefono' => 'nullable|string|regex:/^[\d\s\-\+\(\)]{10,15}$/',
            'curp'     => ['nullable', 'string', 'regex:/^[A-Z]{4}\d{6}[HM][A-Z]{5}[A-Z0-9]{2}$/'],
            'role'     => ['required', Rule::in(self::ROLES)],
        ], [
            'telefono.regex' => 'El formato del teléfono no es válido.',
            'curp.regex'     => 'El formato de la CURP no es válido.',
            'role.in'        => 'El rol seleccionado no es válido.',
        ]);

        try {
            $usuario->update([
                'name'     => $validated['name'],
                'username' => $validated['username'],
                'email'    => $validated['email'],
                'telefono' => $validated['telefono'] ?? null,
                'curp'     => $validated['curp'] ?? null,
                'role'     => $validated['role'],
            ]);

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