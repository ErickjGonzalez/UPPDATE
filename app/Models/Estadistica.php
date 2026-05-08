<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadistica extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tipo',
        'datos'
    ];

    protected $casts = [
        'datos' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
