<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Carrera;
use App\Models\User;
use App\Policies\CarreraPolicy;
use App\Policies\UserPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Aquí se registra la relación modelo ↔ policy.
     */
    protected $policies = [
        Carrera::class => CarreraPolicy::class,
        User::class => UserPolicy::class, // 👈 AÑADIR ESTA LÍNEA
    ];

    /**
     * Registra cualquier servicio de autorización.
     */
    public function boot(): void
    {
        $this->registerPolicies(); //  Necesario para que Laravel cargue  policies
    }
}
