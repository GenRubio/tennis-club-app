<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class Actividade extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'actividades';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'slug',
        'tipo',
        'formulario',
        'visible',
        'activo',
    ];
    // protected $hidden = [];
    // protected $dates = [];


    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function grupoPermitido($grupo, $cliente){
        $opciones = $grupo->opciones()->whereNotNull('precio_socio')
        ->whereNull('precio_normal')
        ->get();
        if (count($opciones) > 0){
            if ($cliente->quotaSocio){
                return true;
            }
            else{
                return false;
            }
        }else{
            return true;
        }
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function actividadTipo()
    {
        return $this->hasOne(ActividadTipo::class, 'id', 'tipo');
    }

    public function extras(){
        return $this->belongsToMany(ActividadExtra::class);
    }

    public function activeExtras(){
        return $this->extras()->where('activo', 1);
    }

    public function formGrupoExtras(){
        return $this->belongsToMany(FormGrupoExtra::class);
    }

    public function activeGrupoExtras(){
        return $this->formGrupoExtras()->where('activo', 1);
    }

    public function formGrupoOpciones(){
        return $this->hasMany(FormGrupoOpcione::class, 'actividad_id', 'id');
    }

    public function activeGrupoOpciones(){
        return $this->formGrupoOpciones()->where('activo', 1);
    }

    public function actividadCategoria(){
        return $this->belongsToMany(ActividadCategoria::class);
    }

    public function fechas(){
        return $this->hasMany(ActividadFecha::class, 'actividad_id', 'id')
        ->where('activo', 1);
    }

    public function fechasCalendario(){
        return $this->hasMany(ActividadFecha::class, 'actividad_id', 'id')
        ->where('activo', 1)
        ->where('calendario', 1);
    }

    public function actividadPdfs(){
        return $this->hasMany(ActividadPdf::class, 'actividad_id', 'id');
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
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str_slug(mb_strtolower($this->attributes['titulo']));
    }

    public function setImagenAttribute($value)
    {
        $attribute_name = 'imagen';

        if (!$this->preventAttrSet) {
            $disk = config('backpack.base.root_disk_name');
            $destination_path = 'public/images/actividades/';
            $destination_path_db = 'images/actividades/';
            if ($value == null) {
                Storage::disk($disk)->delete('public/'.$this->{$attribute_name});
                $this->attributes[$attribute_name] = null;
            }
            if (starts_with($value, 'data:image')) {
                if ($this->{$attribute_name}) {

                    Storage::disk($disk)->delete('public/'.$this->{$attribute_name});

                }
                $image = Image::make($value)->encode('jpg', 90);
                $filename = md5($value . time()) . '-'.$attribute_name.'.jpg';
                Storage::disk($disk)->put($destination_path . $filename, $image->stream());

                $this->attributes[$attribute_name] = $destination_path_db . $filename;
            }

        } else {
            $this->attributes[$attribute_name] = $value;
        }
    }
}
