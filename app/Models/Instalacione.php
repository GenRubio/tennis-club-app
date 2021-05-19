<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;

class Instalacione extends Model
{
    use CrudTrait;
    use HasTranslations;
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'instalaciones';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
        'image',
        'titulo',
        'subtitulo',
        'descripcion',
        'video',
        'slug',
        'activo',
    ];
    protected $translatable = [
        'titulo', 
        'subtitulo',
        'descripcion',
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
    public function instalacionImages()
    {
        return InstalacionImage::where('id_estalacion', $this->attributes['id'])->limit(9)->get();
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
    public function setVideoAttribute($value)
    {
        if ($value != null) {
            $this->attributes['video'] = str_replace("https://youtu.be/", "https://www.youtube.com/embed/", $value);
        } else {
            $this->attributes['video'] = "";
        }
    }
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str_slug(mb_strtolower($this->attributes['titulo']));

    }
    public function setImageAttribute($value)
    {
        $attribute_name = 'image';

        if (!$this->preventAttrSet) {
            $disk = config('backpack.base.root_disk_name');
            $destination_path = 'public/images/instalaciones/';
            $destination_path_db = 'images/instalaciones/';
            if ($value == null) {
                Storage::disk($disk)->delete('public/' . $this->{$attribute_name});
                $this->attributes[$attribute_name] = null;
            }
            if (starts_with($value, 'data:image')) {
                if ($this->{$attribute_name}) {

                    Storage::disk($disk)->delete('public/' . $this->{$attribute_name});
                }
                $image = Image::make($value)->encode('jpg', 90);
                $filename = md5($value . time()) . '-' . $attribute_name . '.jpg';
                Storage::disk($disk)->put($destination_path . $filename, $image->stream());

                $this->attributes[$attribute_name] = $destination_path_db . $filename;
            }
        } else {
            $this->attributes[$attribute_name] = $value;
        }
    }
}
