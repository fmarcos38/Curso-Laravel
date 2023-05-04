<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
//importo lo q nesecito para el mutador
use Illuminate\Database\Eloquent\Casts\Attribute;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //creo metodo para pasar a minus la entrada Y la salida con mayus
    //llamados accesores (get) y mutadores(set)
    protected function name(): Attribute {
        return new Attribute(
            //escribo el get con arrow function
            get: fn($value) => ucwords($value),  
        
            set: function($value){
                return strtolower($value);
            }
        );
    }


    //de esta manera se escribian en versiones mas viejas de laravel 
    /* public function getNameAttribute($value){
        return ucwords(($value));
    }
    public function setNameAttribute($value){
        this->attributes['name'] = strtolower(($value));
    } */

    
}
