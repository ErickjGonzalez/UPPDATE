<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role',
        'telefono',
        'curp',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function carrera()
    {
        return $this->hasOne(Carrera::class, 'director_id');
    }


   public function estadisticas()
    {
        return $this->hasMany(Estadistica::class);
    }

    public function perfilAspirante()
{
    return $this->hasOne(PerfilAspirante::class);
}




}
