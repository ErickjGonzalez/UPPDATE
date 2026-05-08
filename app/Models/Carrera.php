<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'plan_estudios_url',
        'coordinador',
        'duracion',
        'modalidad',
        'perfil_ingreso',
        'perfil_egreso',
        'areas_especializacion',
        'campo_profesional',
        'testimonios',
        'director_id'
    ];

    public function director()
    {
        return $this->belongsTo(User::class, 'director_id');
    }

    public function favoritos()
    {
        return $this->belongsToMany(User::class, 'favoritos');
    }

    public function aspirantes()
    {
        return $this->hasMany(User::class, 'carrera_id')->where('role', 'aspirante');
    }

    public function perfiles()
{
    return $this->hasMany(\App\Models\PerfilAspirante::class, 'carrera_id');
}

}
