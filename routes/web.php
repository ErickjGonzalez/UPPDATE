<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\DirectorCarreraController;
use App\Http\Controllers\RectorController;
use App\Http\Controllers\ConvocatoriaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', fn() => redirect()->route('login'));
Route::get('/dashboard', function () {
    return match (Auth::user()->role) {
        'director'     => redirect('/director/inicio'),
        'rector'       => redirect('/rector/inicio'),
        'superadmin'   => redirect('/admin/inicio'),
        'comunicacion' => redirect('/comunicacion/inicio'),
        default        => abort(403, 'Rol no autorizado'),
    };
})->name('dashboard')->middleware('auth');

// Director
Route::middleware(['auth', 'role:director'])->prefix('director')->group(function () {
    Route::get('/inicio', fn() => view('director.inicio'))->name('director.inicio');
    Route::get('/carrera', [DirectorCarreraController::class, 'edit'])->name('director.carrera.edit');
    Route::patch('/carrera', [DirectorCarreraController::class, 'update'])->name('director.carrera.update');
    Route::get('/carrera/ver', function () {
        $carrera = Auth::user()->carrera;
        return $carrera
            ? view('director.carrera.ver', compact('carrera'))
            : abort(403, 'No tienes una carrera asignada.');
    })->name('director.carrera.ver');
});

// Super Admin
Route::middleware(['auth', 'role:superadmin'])->prefix('admin')->group(function () {
    Route::get('/inicio', fn() => view('admin.inicio'))->name('admin.inicio');

    Route::get('/listausuario', function () {
        return view('admin.listausuario', ['usuarios' => \App\Models\User::all()]);
    })->name('admin.listausuario');

    Route::get('/usuarios', function () {
        return view('admin.usuarios', ['usuarios' => \App\Models\User::all()]);
    })->name('admin.usuarios');

    Route::post('/usuarios', [AuthController::class, 'registerByRoleFromWeb'])->name('superadmin.usuarios.store');
    Route::get('/usuarios/{id}/edit', [AuthController::class, 'edit'])->name('admin.usuarios.edit');
    Route::patch('/usuarios/{id}', [AuthController::class, 'update'])->name('admin.usuarios.update');
    Route::delete('/usuarios/{id}', function ($id) {
        \App\Models\User::findOrFail($id)->delete();
        return redirect()->route('admin.listausuario')->with('success', 'Usuario eliminado correctamente.');
    })->name('admin.usuarios.destroy');

    Route::resource('/carreras', CarreraController::class)->names('superadmin.carreras');
});

// Rector
Route::middleware(['auth', 'role:rector'])->prefix('rector')->group(function () {
    Route::get('/inicio', fn() => view('rector.inicio'))->name('rector.inicio');
    Route::get('/carreras', [RectorController::class, 'carreras'])->name('rector.carreras');

    Route::get('/convocatorias', [RectorController::class, 'index'])->name('rector.convocatorias.index');
    Route::get('/convocatorias/create', [RectorController::class, 'create'])->name('rector.convocatorias.create');
    Route::post('/convocatorias', [RectorController::class, 'store'])->name('rector.convocatorias.store');
    Route::get('/convocatorias/{id}/edit', [RectorController::class, 'edit'])->name('rector.convocatorias.edit');
    Route::put('/convocatorias/{id}', [RectorController::class, 'update'])->name('rector.convocatorias.update');
    Route::delete('/convocatorias/{id}', [RectorController::class, 'destroy'])->name('rector.convocatorias.destroy');
});

// Comunicación
Route::middleware(['auth', 'role:comunicacion'])->prefix('comunicacion')->group(function () {
    Route::get('/inicio', fn() => view('comunicacion.inicio'))->name('comunicacion.inicio');

    Route::prefix('convocatorias')->group(function () {
        Route::get('/', [ConvocatoriaController::class, 'index'])->name('comunicacion.index');
        Route::get('/crear', [ConvocatoriaController::class, 'create'])->name('comunicacion.create');
        Route::post('/', [ConvocatoriaController::class, 'store'])->name('comunicacion.store');
        Route::get('/{id}', [ConvocatoriaController::class, 'show'])->name('comunicacion.show');
        Route::get('/{id}/editar', [ConvocatoriaController::class, 'edit'])->name('comunicacion.edit');
        Route::put('/{id}', [ConvocatoriaController::class, 'update'])->name('comunicacion.update');
        Route::delete('/{id}', [ConvocatoriaController::class, 'destroy'])->name('comunicacion.destroy');
        Route::get('/{id}/ver-pdf', [ConvocatoriaController::class, 'verPdfWeb'])->name('comunicacion.ver-pdf');
        Route::get('/{id}/descargar-pdf', [ConvocatoriaController::class, 'descargarPdfWeb'])->name('comunicacion.descargar-pdf');
        Route::get('/{id}/ver-imagen', [ConvocatoriaController::class, 'verImagen'])->name('comunicacion.ver-imagen');
        Route::post('/{id}/cambiar-estado/{estado}', [ConvocatoriaController::class, 'cambiarEstadoWeb'])->name('comunicacion.cambiar-estado');
    });
});

// Perfil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

require __DIR__ . '/auth.php';