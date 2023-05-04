<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //agrego propiedad PARA el caso de q se cree registro por MASIVO
    //con esto ago q ignore si viene algún otro dato
    //protected $fillable = ['name', 'description', 'categoria'];//para capos permitidos
    //protected $guarded = ['status']; //para campos NO permitidos ->CAP 20 del curso

    
}
