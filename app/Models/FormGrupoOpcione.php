<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class FormGrupoOpcione extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'form_grupo_opciones';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
        'actividad_id',
        'titulo',
        'descripcion',
        'tipo_respuestas',
        'activo'
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
    public function extras(){
        return $this->belongsToMany(ActividadExtra::class);
    }

    public function activeExtras(){
        return $this->extras()->where('activo', 1);
    }

    public function actividade(){
        return $this->hasOne(Actividade::class, 'id', 'actividad_id');
    }

    public function opciones(){
        return $this->hasMany(FormOpcionOpcione::class, 'form_grupo_opcion_id', 'id');
    }

    public function activeOpciones(){
        return $this->opciones()->where('activo', 1);
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
