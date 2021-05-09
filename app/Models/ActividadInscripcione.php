<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadInscripcione extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'actividad_id',
        'pagado',
        'opciones'
    ];
}
