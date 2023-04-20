<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //defino metodo
    public function __invoke(){//utilizo el metodo __invoke SOLO cuando quiero q un controlador Admin una sola ruta
        return view('home');
    }
}
