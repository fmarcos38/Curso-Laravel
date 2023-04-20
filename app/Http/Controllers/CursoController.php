<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view('cursos.index');//esta forma es por estar dentro de la carpeta curso
    }


    public function create(){
        return view('cursos.create');
    }

    //muestra un elemento
    public function show($curso){
        return view('cursos.show', compact('curso'));//va en un array
    }
}
