<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ShopArticle extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'shop_articles';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'imagen',
        'descripcion',
        'precio',
        'activo',
        'shop_categorie_id'
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
    public function setPrecioAttribute($value)
    {
        return $this->attributes['precio'] = $value;
    }

    public function setImagenAttribute($value)
    {
        $attribute_name = 'imagen';

        if (!$this->preventAttrSet) {
            $disk = config('backpack.base.root_disk_name');
            $destination_path = 'public/images/articulos/';
            $destination_path_db = 'images/articulos/';
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
