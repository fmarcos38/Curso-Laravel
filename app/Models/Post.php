<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    /*  
        hago relación inversa a users->posts 
        hago relación 1 a muchos pero inversa
    */
    public function user(){
        return $this->belongsTo('App\Models\User');
    }


    /*  
        1 post pertenece a 1 categ 
    */
    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }


    /* relació 1 a 1 polimorfica*/
    public function image(){
        return $this->morphOne('App\Models\Image', 'imagiable'); // 'imagiable' --> es el nombre del metodo creado en el Model Image
    }


    /* relación 1 a muchos polimorfica  COMO es a muchos va --> morphToMany*/
    public function comments(){
        return $this->morphToMany('App\models\Comment', 'commentable'); //el 2do param es el metodo creado en el model Comment 
    }
}
