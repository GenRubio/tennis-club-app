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
        'quota_socio_id',
        'image',
    ];
    // protected $hidden = [];
    // protected $dates = [];

    public static function boot()
    {
        parent::boot();

        static::deleting(function ($client) {
            //Deleting all clients
            foreach ($client->actividadInscripciones as $inscripcion) {
                $inscripcion->delete();
            }
        });
    }

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function parentsIds()
    {
        $clients = Client::whereIn('id', function ($query) {
            $query->select('client_id_1')
                ->from('client_parientes_relacions')
                ->where('client_tipo_id', 2)
                ->orWhere('client_tipo_id', 1)
                ->groupBy('client_id_1');
        })->orWhere(function ($query) {
            $query->whereNotIn('id', function ($query) {
                $query->select('client_id_1')
                    ->from('client_parientes_relacions');
            });
        });
        return $clients->pluck('id')->toArray();
    }

    public function familiares(){
        $familiaresId = ClientParientesRelacion::where('client_id_2', $this->attributes['id'])->pluck('client_id_1')->toArray();
        return Client::whereIn('id', $familiaresId)->get();
    }

    public function inscritoActividad($actividadId){
        $inscripcion = ActividadInscripcione::where('cliente_id', $this->attributes['id'])
        ->where('actividad_id', $actividadId)
        ->first();

        if ($inscripcion){
            return true;
        }
        else{
            return false;
        }
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function quotaSocio()
    {
        return $this->hasOne(QuotaSocio::class, 'id', 'quota_socio_id');
    }

    public function actividadInscripciones(){
        return $this->hasMany(ActividadInscripcione::class, 'cliente_id', 'id');
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
    public function getFullNameAttribute()
    {
        return $this->attributes['first_name'] . " " . $this->attributes['second_name'];
    }

    public function setQuotaSocioIdAttribute($value)
    {
        $familiares = Client::where('user_id', $this->attributes['user_id'])->get();

        if ($value == 4) {
            if (count($familiares) > 0) {
                Client::where('user_id', $this->attributes['user_id'])
                    ->where('id', '!=', $this->attributes['id'])
                    ->update(array("quota_socio_id" => $value));
            }
        } else {
            if (count($familiares) > 0) {
                Client::where('user_id', $this->attributes['user_id'])
                    ->where('id', '!=', $this->attributes['id'])
                    ->update(array("quota_socio_id" => null));
            }
        }
        return $this->attributes['quota_socio_id'] = $value;
    }

    public function getClientTipo($parentId)
    {
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
