<?php

namespace App\Policies;

use App\Models\Carrera;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CarreraPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Carrera $carrera)
    {
        // Todos los usuarios autenticados pueden ver
        return true;
    }

    public function create(User $user)
    {
        // Solo el super_admin puede crear
        return $user->role === 'superadmin';
    }

    public function update(User $user, Carrera $carrera)
    {
        // Super admin puede todo
        if ($user->role === 'superadmin') {
            return true;
        }

        // Director solo su carrera
        return $user->role === 'director' && $carrera->director_id === $user->id;
    }

    public function delete(User $user, Carrera $carrera)
    {
        // Solo super admin puede eliminar
        return $user->role === 'superadmin';
    }
}
