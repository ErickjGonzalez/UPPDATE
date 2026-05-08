<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventoConvocatoria extends Model
{
        protected $table = 'eventos_convocatorias'; // Asegúrate de que esto esté apuntando al nombre correcto de la tabla

    use HasFactory;

    protected $fillable = [
        'titulo', 'descripcion', 'fecha_inicio', 'fecha_fin', 'tipo', 'creador_id'
    ];

    // Relación con el usuario (Rector)
    public function creador()
    {
        return $this->belongsTo(User::class, 'creador_id');
    }
}

