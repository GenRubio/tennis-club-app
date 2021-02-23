<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait, \Venturecraft\Revisionable\RevisionableTrait;
use Illuminate\Database\Eloquent\Model;

class CasalInscripcione extends Model
{
    use CrudTrait;
    //use RevisionableTrait;
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'casal_inscripciones';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
        'id',
        'id_alumno',
        'nombre',
        'apellidos',
        'adresa',
        'poblacion',
        'codigo_postal',
        'provincia',
        'telefono_1',
        'telefono_2', 
        'data_nacimiento',
        'n_cat_salut',
        'n_cuenta_bancaria',
        'nombre_titular',
        'nif_titular',
        'email',
        'validado',
        'created_at',
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
    public function casalInsripcionesMeses()
    {
        return $this->hasMany(AcademyLesson::class, 'inscripcion_id');
    }

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

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
