<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientParientesRelacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id_1',
        'client_id_2',
        'client_tipo_id',
    ];

     /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function clientTipo(){
        return $this->hasOne(ClientTiposPariente::class, 'id', 'client_tipo_id');
    }
}
