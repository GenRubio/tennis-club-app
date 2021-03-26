<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Noticia extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'noticias';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
        'titulo',
        'descripcion',
        'image',
        'activo',
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
    public function setImageAttribute($value)
    {
        $attribute_name = 'image';

        if (!$this->preventAttrSet) {
            $disk = config('backpack.base.root_disk_name');
            $destination_path = 'public/images/noticias/';
            $destination_path_db = 'images/noticias/';
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
