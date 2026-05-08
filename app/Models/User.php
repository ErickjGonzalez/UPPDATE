<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // ✅ Campos que pueden ser llenados en masa
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role',
        'telefono',
        'curp',
    ];

    // ✅ Campos ocultos cuando se serializa el modelo
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // ✅ Relación: un usuario (director) puede tener una carrera
    public function carrera()
    {
        return $this->hasOne(Carrera::class, 'director_id');
    }

    // ✅ Relación muchos a muchos con favoritos
    public function favoritos()
    {
        return $this->belongsToMany(Carrera::class, 'favoritos');
    }

    // ✅ Relación uno a muchos con estadísticas
    public function estadisticas()
    {
        return $this->hasMany(Estadistica::class);
    }

    public function perfilAspirante()
{
    return $this->hasOne(PerfilAspirante::class);
}




}
