<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
//importo lo q nesecito para el mutador
use Illuminate\Database\Eloquent\Casts\Attribute;
//import el modelo Profile
use App\Models\Profile;

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


    /*  metodo para recuperar el perfil de un usuario 
        SERIA para una RELACION 1a1
    */
    public function profile(){
        //busca el primer perfil con el id del user actual
        //$profile = Profile::where('user_id', $this->id)->first();

        //return $profile;

        //hago lo mismo pero con un metodo
        return $this->hasOne(Profile::class); //debo importar el modelo Profile
    }


    /*  SERIA para una RELACION 1amuchos 
        un user puede escribir varios posts
    */
    public function posts(){
        return $this->hasMany('App\Models\Post');
    }


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








}
