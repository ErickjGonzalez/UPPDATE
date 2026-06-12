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

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getPdfUrlAttribute()
    {
        return $this->pdf ? asset('storage/convocatorias/pdf/' . $this->pdf) : null;
    }

    public function getImagenUrlAttribute()
    {
        return $this->imagen ? asset('storage/convocatorias/imagenes/' . $this->imagen) : null;
    }

    public function tienePdf()
    {
        return !empty($this->pdf);
    }

    public function tieneImagen()
    {
        return !empty($this->imagen);
    }
}