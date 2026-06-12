<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FavoritoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\RectorController;
use App\Http\Controllers\ConvocatoriaController;

// Rutas públicas
Route::post('/login', [AuthController::class, 'login']);

Route::get('/public/carreras', [CarreraController::class, 'apiIndex']);
Route::get('/public/carreras/{id}', [CarreraController::class, 'apiShowPublic']);

Route::get('/public/convocatorias', [ConvocatoriaController::class, 'indexPublic']);
Route::get('/public/convocatorias/{id}', [ConvocatoriaController::class, 'showPublic']);
Route::get('/public/convocatorias/{id}/pdf', [ConvocatoriaController::class, 'verPdf']);
Route::get('/public/convocatorias/{id}/imagen', [ConvocatoriaController::class, 'verImagen']);

// Rutas protegidas
Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/check-role', function () {
        return response()->json([
            'ok'   => true,
            'role' => auth()->user()->role,
            'user' => auth()->user()->only(['id', 'name', 'email', 'username']),
        ]);
    });

    // Carreras (permisos manejados por Policy)
    Route::get('/carreras', [CarreraController::class, 'index']);
    Route::get('/carreras/{id}', [CarreraController::class, 'show']);
    Route::post('/carreras', [CarreraController::class, 'store']);
    Route::put('/carreras/{id}', [CarreraController::class, 'update']);
    Route::delete('/carreras/{id}', [CarreraController::class, 'destroy']);

  

    // Comunicación
    Route::middleware('role:comunicacion')->prefix('comunicacion')->group(function () {
        Route::get('/convocatorias', [ConvocatoriaController::class, 'index']);
        Route::get('/convocatorias/{id}', [ConvocatoriaController::class, 'show']);
        Route::post('/convocatorias', [ConvocatoriaController::class, 'store']);
        Route::put('/convocatorias/{id}', [ConvocatoriaController::class, 'update']);
        Route::delete('/convocatorias/{id}', [ConvocatoriaController::class, 'destroy']);
        Route::post('/convocatorias/{id}/cambiar-estado', [ConvocatoriaController::class, 'cambiarEstado']);
        Route::get('/convocatorias/{id}/pdf', [ConvocatoriaController::class, 'verPdfWeb']);
        Route::get('/convocatorias/{id}/descargar-pdf', [ConvocatoriaController::class, 'descargarPdf']);
    });

    // Rector
    Route::middleware('role:rector')->group(function () {
        Route::post('/rector/agregar-evento-convocatoria', [RectorController::class, 'store']);
        Route::put('/rector/editar-evento-convocatoria/{id}', [RectorController::class, 'update']);
        Route::delete('/rector/eliminar-evento-convocatoria/{id}', [RectorController::class, 'destroy']);
        Route::get('/rector/obtener-eventos-convocatorias', [RectorController::class, 'index']);

        Route::prefix('reportes')->group(function () {
            Route::get('/general', [ReporteController::class, 'reporteGeneral']);
            Route::get('/carrera/{id}', [ReporteController::class, 'reporteCarrera']);
        });
    });

    // Super Admin
    Route::middleware('role:super_admin')->group(function () {
        Route::post('/register/director', [AuthController::class, 'registerDirector']);
        Route::post('/register/superadmin', [AuthController::class, 'registerSuperAdmin']);
        Route::post('/register/rector', [AuthController::class, 'registerRector']);
        Route::post('/register/comunicacion', [AuthController::class, 'registerComunicacion']);

        Route::prefix('admin')->group(function () {
            Route::get('/convocatorias', [ConvocatoriaController::class, 'indexAdmin']);
            Route::get('/convocatorias/{id}', [ConvocatoriaController::class, 'showAdmin']);
            Route::put('/convocatorias/{id}', [ConvocatoriaController::class, 'updateAdmin']);
            Route::delete('/convocatorias/{id}', [ConvocatoriaController::class, 'destroyAdmin']);
        });
    });
});