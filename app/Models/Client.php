<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'clients';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
        'user_id',
        'first_name',
        'second_name',
        'sexe',
        'dni',
        'nacionalidad',
        'cat_salut',
        'address',
        'poblacio',
        'cp',
        'provincia',
        'data_naxement',
        'conte_bancari',
        'telefono_1',
        'telefono_2',
        'name_emergenica',
        'telefono_1_emergencia',
        'telefono_2_emergencia',
        'socio',
        'image',
    ];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

  
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */
    public function getFullNameAttribute()
    {
        return $this->attributes['first_name'] . " " . $this->attributes['second_name'];
    }

    public function getFamiliaresAttribute(){
         
    }

    public function getClientTipoAttribute(){
    
        $clientPariente = ClientParientesRelacion::where('client_id_1', $this->attributes['id'])->first();
        return $clientPariente ? $clientPariente->clientTipo->nom : '---';
    }

    public function getClientTipo($parentId){
        $clientPariente = ClientParientesRelacion::where('client_id_1', $this->attributes['id'])
        ->where('client_id_2', $parentId)
        ->first();
        return $clientPariente ? $clientPariente->clientTipo->nom : '---';
    }
    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
