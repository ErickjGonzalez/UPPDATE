<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convocatoria extends Model
{
    use HasFactory;

      protected $table = 'convocatoriaas';

    protected $fillable = [
        'titulo',
        'descripcion',
        'tipo',
        'fecha_inicio',
        'fecha_fin',
        'lugar',
        'estado',
        'pdf',
        'imagen',
        'user_id'
    ];

    protected $casts = [
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date'
    ];

    // Relación con el usuario
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Método para obtener la URL del PDF
    public function getPdfUrlAttribute()
    {
        return $this->pdf ? asset('storage/convocatorias/pdf/' . $this->pdf) : null;
    }

    // Método para obtener la URL de la imagen
    public function getImagenUrlAttribute()
    {
        return $this->imagen ? asset('storage/convocatorias/imagenes/' . $this->imagen) : null;
    }

    // Método para saber si tiene PDF
    public function tienePdf()
    {
        return !empty($this->pdf);
    }

    // Método para saber si tiene imagen
    public function tieneImagen()
    {
        return !empty($this->imagen);
    }
}