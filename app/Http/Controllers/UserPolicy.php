<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Determine whether the user can create new models.
     *
     * En este caso, solo los superadministradores pueden crear nuevos usuarios
     * (directores, rectores, u otros superadmins).
     *
     * @param \App\Models\User $user El usuario que realiza la acción.
     * @return bool
     */
    public function create(User $user): bool
    {
        return $user->role === 'superadmin';
    }


}