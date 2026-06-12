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
     */
    protected $policies = [
        Carrera::class => CarreraPolicy::class,
        User::class => UserPolicy::class,
    ];

    /**
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}
