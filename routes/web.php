<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
//importo el controlador
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;



//ruta a home
Route::get('/', HomeController::class)->name('home');

//va en un array PARA poder espesificar q metodo maneja esta ruta
Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');

//va por url el dato de la variable
Route::get('/cursos/create',[ CursoController::class, 'create'])->name('curso.create');

//ruta q recibe la info
Route::post('cursos', [CursoController::class, 'store'])->name('curso.store');

Route::get('/cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show'); 
//con esto ->name('cursos.show') ->le doy nombre a las rutas para llamarlas desde otros archivos

//editar curso
Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('curso.edit');

//actualizar
Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');

//eliminar registro
Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');

//creo ruta para CONTENIDO estatico -> para la vista NOSOTROS
Route::view('nosotros', 'nosotros')->name('nosotros');

//ruta para envio de mail CAP 25
Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');

//post para el form de contactanos
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');



/* forma de declarar rutas con RESOURCE todas en una sola linea de codigo */   //--->CAP 22
//Route::resource('cursos', CursoController::class);