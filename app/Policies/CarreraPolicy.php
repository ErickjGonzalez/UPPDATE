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
        return true;
    }

    public function create(User $user)
    {
        return $user->role === 'superadmin';
    }

    public function update(User $user, Carrera $carrera)
    {
        if ($user->role === 'superadmin') {
            return true;
        }

        return $user->role === 'director' && $carrera->director_id === $user->id;
    }

    public function delete(User $user, Carrera $carrera)
    {
        return $user->role === 'superadmin';
    }
}
