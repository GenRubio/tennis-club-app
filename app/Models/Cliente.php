<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellidos',
        'data_nacimiento',
        'data_nacimiento',
        'email',
        'telefono',
        'codigo_postal',
        'direccion',
        'localidad',
        'provincia',
        'pais',
        'dni_nie',
        'data_alta',
        'data_baja'
    ];
}
