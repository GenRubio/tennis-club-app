<?php

namespace App\Models;

use App\Mail\NewsletterEmail;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;

class Noticia extends Model
{
    use CrudTrait;
    use HasTranslations;
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
        'actividad_id',
        'titulo',
        'descripcion',
        'image',
        'activo',
        'slug',
        'created_at',
    ];
    protected $translatable = [
        'titulo', 
        'descripcion',
    ];
    // protected $hidden = [];
    // protected $dates = [];

    public static function boot()
    {
        parent::boot();

        self::created(function ($noticia) {
            if ($noticia->activo == 1) {
                $usersEmail = Newsletter::all()->pluck("email")->toArray();
                Mail::bcc($usersEmail)->send(new NewsletterEmail($noticia));
            }
        });

        self::updating(function ($noticia) {
            if ($noticia->activo == 1) {
                $usersEmail = Newsletter::all()->pluck("email")->toArray();
                Mail::bcc($usersEmail)->send(new NewsletterEmail($noticia));
            }
        });
    }

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function comments()
    {
        return $this->hasMany(NoticiaComentario::class, 'noticia_id', 'id');
    }

    public function actividadNoticia(){
        return $this->hasOne(Actividade::class, 'id', 'actividad_id');
    }

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
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str_slug(mb_strtolower($this->attributes['titulo']));
    }
    public function setImageAttribute($value)
    {
        $attribute_name = 'image';

        if (!$this->preventAttrSet) {
            $disk = config('backpack.base.root_disk_name');
            $destination_path = 'public/images/noticias/';
            $destination_path_db = 'images/noticias/';
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
