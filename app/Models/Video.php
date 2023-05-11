<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    /* relación 1 a muchos inversa con user */
    public function user(){
        return $this->belongsTo('App\Models\Users');
    }


    /* relación 1 a muchos polimorfica  COMO es a muchos va --> morphToMany*/
    public function comments(){
        return $this->morphToMany('App\models\Comment', 'commentable'); //el 2do param es el metodo creado en el model Comment 
    }
}
