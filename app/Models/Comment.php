<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /* relacion 1 a muchos inversa con User */
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    /* relación  polimorfica 1 a muchos */
    public function commentable(){
        return $this->morphTo();//como es polimirfica Y es el case de 1 , no el de muchos; va el metodo morthTo();
    }
}
