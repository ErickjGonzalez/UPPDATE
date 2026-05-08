<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DirectorCarreraController;
use App\Http\Controllers\RectorController;
use App\Http\Controllers\ConvocatoriaController;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return view('welcome');
});

// Ruta dashboard: detecta rol y redirige
Route::get('/dashboard', function () {
    $user = Auth::user();

    if (!$user) {
        return redirect()->route('login'); // Si no autenticado, manda a login
    }

    return match ($user->role) {
        'director' => redirect('/director/inicio'),
        'rector' => redirect('/rector/inicio'),
        'superadmin' => redirect('/admin/inicio'),
        'comunicacion' => redirect('/comunicacion/inicio'), 
        default => abort(403, 'Rol no autorizado'),
    };
})->name('dashboard')->middleware('auth');

// Rutas inicio para cada rol con middleware propio
Route::middleware(['auth', 'role:director'])->group(function () {
    Route::get('/director/inicio', fn() => view('director.inicio'))->name('director.inicio');
    Route::get('/director/carrera', [DirectorCarreraController::class, 'edit'])->name('director.carrera.edit');
    Route::patch('/director/carrera', [DirectorCarreraController::class, 'update'])->name('director.carrera.update');
    Route::get('/director/carrera/ver', function () {
        $carrera = Auth::user()->carrera;

        if (!$carrera) {
            return 'No tienes una carrera asignada.';
        }

        return view('director.carrera.ver', compact('carrera'));
    })->name('director.carrera.ver');
});

Route::middleware(['auth', 'role:superadmin'])->group(function () {
    // Rutas relacionadas con el superadmin
    Route::get('/admin/inicio', fn() => view('admin.inicio'))->name('admin.inicio');
    Route::get('/admin/listausuario', function () {
        $usuarios = \App\Models\User::all();
        return view('admin.listausuario', compact('usuarios'));
    })->name('admin.listausuario');

    // En web.php
Route::get('/admin/usuarios/{id}/edit', [AuthController::class, 'edit'])->name('admin.usuarios.edit');
Route::patch('/admin/usuarios/{id}', [AuthController::class, 'update'])->name('admin.usuarios.update');


    

    Route::get('/admin/usuarios', function () {
        $usuarios = \App\Models\User::all();
        return view('admin.usuarios', compact('usuarios'));
    })->name('admin.usuarios');

    Route::delete('/admin/usuarios/{id}', function ($id) {
        $user = \App\Models\User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.listausuario')->with('success', 'Usuario eliminado correctamente.');
    })->name('admin.usuarios.destroy');

    Route::resource('/admin/carreras', CarreraController::class)->names('superadmin.carreras');
    Route::post('/admin/usuarios', [AuthController::class, 'registerByRoleFromWeb'])->name('superadmin.usuarios.store');
});

// Rutas para el rector
Route::middleware(['auth', 'role:rector'])->prefix('rector')->group(function () {
    Route::get('/inicio', fn() => view('rector.inicio'))->name('rector.inicio');

    Route::get('/convocatorias', [RectorController::class, 'index'])->name('rector.convocatorias.index');
    Route::get('/convocatorias/create', [RectorController::class, 'create'])->name('rector.convocatorias.create');
    Route::post('/convocatorias', [RectorController::class, 'store'])->name('rector.convocatorias.store');
    Route::get('/convocatorias/{id}/edit', [RectorController::class, 'edit'])->name('rector.convocatorias.edit');
    Route::put('/convocatorias/{id}', [RectorController::class, 'update'])->name('rector.convocatorias.update');
    Route::delete('/convocatorias/{id}', [RectorController::class, 'destroy'])->name('rector.convocatorias.destroy');
    Route::get('/rector/carreras', [RectorController::class, 'carreras'])->name('rector.carreras');
    Route::get('/dashboard', [RectorController::class, 'dashboard'])->name('rector.dashboard');
});

// COMUNICACIÓN - NUEVO GRUPO
// Rutas para comunicación
Route::middleware(['auth', 'role:comunicacion'])->prefix('comunicacion')->group(function () {
    // Inicio del área de comunicación
    Route::get('/inicio', function () {
        return view('comunicacion.inicio');
    })->name('comunicacion.inicio');
    
    // Gestión de convocatorias
    Route::prefix('convocatorias')->group(function () {
        Route::get('/', [ConvocatoriaController::class, 'index'])->name('comunicacion.index');
        Route::get('/crear', [ConvocatoriaController::class, 'create'])->name('comunicacion.create');
        Route::post('/', [ConvocatoriaController::class, 'store'])->name('comunicacion.store');
        Route::get('/{id}', [ConvocatoriaController::class, 'show'])->name('comunicacion.show');
        Route::get('/{id}/editar', [ConvocatoriaController::class, 'edit'])->name('comunicacion.edit');
        Route::put('/{id}', [ConvocatoriaController::class, 'update'])->name('comunicacion.update');
        Route::delete('/{id}', [ConvocatoriaController::class, 'destroy'])->name('comunicacion.destroy');
           // Rutas para archivos
  Route::get('/convocatorias/{id}/descargar-pdf', [ConvocatoriaController::class, 'descargarPdfWeb'])->name('comunicacion.descargar-pdf');
    Route::get('/convocatorias/{id}/ver-pdf', [ConvocatoriaController::class, 'verPdfWeb'])->name('comunicacion.ver-pdf');
    Route::get('/convocatorias/{id}/ver-imagen', [ConvocatoriaController::class, 'verImagen'])->name('comunicacion.ver-imagen');
    Route::post('/convocatorias/{id}/cambiar-estado/{estado}', [ConvocatoriaController::class, 'cambiarEstadoWeb'])->name('comunicacion.cambiar-estado');
});
});

// Ruta de perfil
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Ruta para logout y redirección al login
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Aquí debería ir la definición de las rutas de autenticación
require __DIR__.'/auth.php';



    