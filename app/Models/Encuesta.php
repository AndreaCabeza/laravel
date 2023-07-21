<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    use HasFactory;
    use HasFactory;

    protected $fillable = [
        'nombre_completo',
        'email',
        'nivel_satisfaccion',
        'sugerencias',
        'telefono',
    ];
    protected $table = 'encuesta';
}
