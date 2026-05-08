<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FavoritoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\AspiranteController;
use App\Http\Controllers\RectorController;
use App\Http\Controllers\ConvocatoriaController;

// En routes/api.php
Route::get('/public/carreras', [CarreraController::class, 'apiIndex']);
// Ruta pública para obtener los detalles de la carrera
Route::get('/public/carreras/{id}', [CarreraController::class, 'apiShowPublic']);
Route::put('/public/aspirantes/{id}', [AspiranteController::class, 'update']);
Route::get('/public/aspirantes/{id}', [AspiranteController::class, 'apiShowPublic']);

// Rutas públicas
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/login', [AspiranteController::class, 'login']);

Route::post('/register/aspirante', [AuthController::class, 'registerAspirante']);
Route::post('/aspirantes/register', [AspiranteController::class, 'register']);

// Rutas públicas para convocatorias (para que todos puedan ver las publicadas)
Route::get('/public/convocatorias/publicadas', [ConvocatoriaController::class, 'indexPublicadas']);
Route::get('/public/convocatorias/publicadas/{id}', [ConvocatoriaController::class, 'showPublicada']);

// Rutas para servir archivos públicamente
Route::get('/public/convocatorias/{id}/pdf', [ConvocatoriaController::class, 'verPdf']);
Route::get('/public/convocatorias/{id}/imagen', [ConvocatoriaController::class, 'verImagen']);

// Rutas protegidas
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    // 🎯 Aspirante - seleccionar carrera
    Route::middleware('role:aspirante')->post('/aspirante/seleccionar-carrera', [AspiranteController::class, 'seleccionarCarrera']);

    // 🎯 Carreras (la Policy se encarga de permisos)
    Route::get('/carreras', [CarreraController::class, 'index']);
    Route::get('/carreras/{id}', [CarreraController::class, 'show']);
    Route::post('/carreras', [CarreraController::class, 'store']);
    Route::put('/carreras/{id}', [CarreraController::class, 'update']);
    Route::delete('/carreras/{id}', [CarreraController::class, 'destroy']);

    // 🎯 Favoritos
    Route::get('/favoritos', [FavoritoController::class, 'index']);
    Route::post('/favoritos', [FavoritoController::class, 'store']);
    Route::delete('/favoritos/{id}', [FavoritoController::class, 'destroy']);

    // 🎯 CONVOCATORIAS - ROL COMUNICACION
    Route::middleware('role:comunicacion')->prefix('comunicacion')->group(function () {
        // CRUD completo de convocatorias
        Route::get('/convocatorias', [ConvocatoriaController::class, 'index']);
        Route::get('/convocatorias/{id}', [ConvocatoriaController::class, 'show']);
        Route::post('/convocatorias', [ConvocatoriaController::class, 'store']);
        Route::put('/convocatorias/{id}', [ConvocatoriaController::class, 'update']);
        Route::delete('/convocatorias/{id}', [ConvocatoriaController::class, 'destroy']);
        
        // Rutas adicionales para convocatorias
        Route::post('/convocatorias/{id}/cambiar-estado', [ConvocatoriaController::class, 'cambiarEstado']);
        Route::get('/convocatorias/{id}/descargar-pdf', [ConvocatoriaController::class, 'descargarPdf']);
        
        // Para visualizar PDF (si quieres mantenerlo en API también)
        Route::get('/convocatorias/{id}/ver-pdf', [ConvocatoriaController::class, 'verPdf']);
    });

    // 🎯 Rector - eventos y convocatorias (ya tienes esto)
    Route::middleware('role:rector')->group(function () {
        Route::post('/rector/agregar-evento-convocatoria', [RectorController::class, 'agregarEventoConvocatoria']);
        Route::put('/rector/editar-evento-convocatoria/{id}', [RectorController::class, 'editarEventoConvocatoria']);
        Route::delete('/rector/eliminar-evento-convocatoria/{id}', [RectorController::class, 'eliminarEventoConvocatoria']);
        Route::get('/rector/obtener-eventos-convocatorias', [RectorController::class, 'obtenerEventosConvocatorias']);
    });

    // 🎯 Reportes - solo rector
    Route::middleware('role:rector')->prefix('reportes')->group(function () {
        Route::get('/general', [ReporteController::class, 'reporteGeneral']);
        Route::get('/carrera/{id}', [ReporteController::class, 'reporteCarrera']);
    });

    // 🎯 Gestión de usuarios (solo super_admin)
    Route::middleware('role:super_admin')->group(function () {
        Route::post('/register/director', [AuthController::class, 'registerDirector']);
        Route::post('/register/superadmin', [AuthController::class, 'registerSuperAdmin']);
        Route::post('/register/rector', [AuthController::class, 'registerRector']);
        Route::post('/register/comunicacion', [AuthController::class, 'registerComunicacion']);
    });

    // 🎯 SuperAdmin también puede ver todas las convocatorias
    Route::middleware('role:super_admin')->prefix('admin')->group(function () {
        Route::get('/convocatorias', [ConvocatoriaController::class, 'indexAdmin']);
        Route::get('/convocatorias/{id}', [ConvocatoriaController::class, 'showAdmin']);
        Route::put('/convocatorias/{id}', [ConvocatoriaController::class, 'updateAdmin']);
        Route::delete('/convocatorias/{id}', [ConvocatoriaController::class, 'destroyAdmin']);
    });

    // Opción para verificar el rol actual
    Route::get('/check-role', function () {
        return response()->json([
            'ok' => true, 
            'role' => auth()->user()->role,
            'user' => auth()->user()->only(['id', 'name', 'email', 'username'])
        ]);
    });
});