<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'email',
        'rol_id',
        'password',
        'token_recover_email',
        'active_token_email',
        'token_validate_email',
        'email_validate',
        'provider_id',
        'provider',
        'activo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function cliente()
    {
        $cliente = Client::where('user_id',  $this->attributes['id'])
            ->join('client_parientes_relacions', 'client_parientes_relacions.client_id_1', 'clients.id')
            ->where('client_parientes_relacions.client_id_1', 1)
            ->orWhere('client_parientes_relacions.client_id_1', 2)
            ->limit(1)
            ->first();

        if ($cliente) {
            return $cliente;
        } else {
            $cliente = Client::where('user_id',  $this->attributes['id'])->first();

            return $cliente;
        }
    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function newsletter()
    {
        return $this->hasOne(Newsletter::class, 'email', 'email');
    }

    public function role()
    {
        return $this->hasOne(Role::class, 'id', 'rol_id');
    }

    public function clients()
    {
        return $this->hasMany(Client::class, 'user_id', 'id');
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

    public function getUserNameAttribute()
    {
        $cliente = Client::where('user_id',  $this->attributes['id'])
            ->join('client_parientes_relacions', 'client_parientes_relacions.client_id_1', 'clients.id')
            ->where('client_parientes_relacions.client_id_1', 1)
            ->orWhere('client_parientes_relacions.client_id_1', 2)
            ->limit(1)
            ->first();

        if ($cliente) {
            return $cliente->full_name;
        } else {
            $cliente = Client::where('user_id',  $this->attributes['id'])->first();

            return $cliente->full_name;
        }
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
