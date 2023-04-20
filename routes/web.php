<?php

use Illuminate\Support\Facades\Route;
//importo el controlador
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;


//declaración de un controlador q maneja varias rutas -> LARAVEL 9 <---
/* Route::controller(CursoController::class)->group(function(){

    Route::get('/cursos', 'index');

    Route::get('/cursos/create', 'create');

    Route::get('/cursos/{curso}', 'show');
}); */


Route::get('/', HomeController::class);

//va en un array PARA poder espesificar q metodo maneja esta ruta
Route::get('/cursos', [CursoController::class, 'index']);

//va por url el dato de la variable
Route::get('/cursos/create',[ CursoController::class, 'create']);

Route::get('/cursos/{curso}', [CursoController::class, 'show']);

