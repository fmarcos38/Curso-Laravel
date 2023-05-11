<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    /* esto es para la asignación masiva */
    protected $guarded = [];


    use HasFactory;


    /*  */
    public function imagiable(){
        $this->morphTo();
    }
}
