<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable = [
        'empleado_id',
        'nombre',
        'apellidos',
        'data_nacimiento',
        'dni_nif',
        'direccion',
        'codigo_postal',
        'localidad',
        'provincia',
        'pais',
        'sexo',
        'edad',
        'pais_origen',
        'telefono_fijo',
        'telefono_movil',
        'correo_electronico',
        'estado_civil',
        'data_alta',
        'data_baja',
        'tipo'
    ];
}
