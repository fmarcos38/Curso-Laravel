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
}
