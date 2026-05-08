<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aspirante extends Model
{
    protected $fillable = [
    'nombre_completo', 'curp', 'fecha_nacimiento', 'telefono',
    'genero', 'genero_otro', 'escuela_procedencia', 'municipio', 'estado', 'lengua_indigena',
    'discapacidad_visual', 'discapacidad_auditiva', 'discapacidad_motriz', 'discapacidad_otra',
    'discapacidad_otra_texto', 'correo', 'usuario', 'password',
];

}
