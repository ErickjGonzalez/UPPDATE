<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerfilAspirante extends Model
{
    protected $table = 'perfil_aspirantes';

    protected $fillable = [
        'user_id',
        'genero',
        'habla_lengua_indigena',
        'lengua_indigena',
        'institucion_procedencia',
        'municipio',
        'estado',
        'tiene_discapacidad',
        'discapacidad',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
