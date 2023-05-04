<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        //return $cursos; //es solo para ver por el navegador los datos de la DB

        return view('cursos.index', compact('cursos'));//le paso la variable a la vista MEDIANTE compact('cursos')SIN el->$
    }


    public function create(){
        return view('cursos.create');
    }

    //metodo para la creacion de un registro
    public function store(StoreCurso $request){//por parametro recibo la info del form
        
        //validacion de la info -> a traves del archivo StoreCurso POR eso el parametro es de ese TIPO        

        /* promer manera de creacion ----------------------------------------*/
        //return $request; //muestro por pantalla el contenido q viene
        $curso = new Curso();

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        //puedo ver por pantalla-> return $curso;

        //guardo la info 
        $curso->save();
        
        /*FIN promer manera de creacion ----------------------------------------*/
        
        /* Segunda forma de creación de registro -> LLAMADA asignación MASIVA*/ //----> CAP 20 del curso

        //$curso = Curso::create([$request->all()]); //$request->all() --> almacena en un array todo la data q viene del FORM
        
        /* FIN 2da forma */ //-----> HABILITAR lineas de codigo en carpeta MODEL -> arch Curso
        return redirect()->route('cursos.show', $curso->id); //re direcciono a dicha ruta una vez enviado el form
    }


    //muestra un elemento
    public function show($id){

        //me traigo el registro po su ID
        $curso = Curso::find($id);
        //return $curso; //muestro por pantalla


        return view('cursos.show', compact('curso'));//va en un array
    }


    public function edit(Curso $curso){

        //return $curso;
        //voy a retornar una vista ->Va a ser un Form para editar
        return view('cursos.edit', compact('curso'));
    }
    

    public function update(Request $request, Curso $curso){ //el parametro va a ser una instacia de la clase Curso

        //return $curso;
        //return $request; //muestro por pantalla el contenido q viene

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        //guardo la info 
        $curso->save();


        /* SEGUNDA forma MASIVA --------------------------*/

        //$curso->update($request->all());

        /* FIN---SEGUNDA forma MASIVA --------------------------*/
        return redirect()->route('cursos.show', $curso->id); //re direcciono a dicha ruta una vez enviado el form

    }


    //eliminar
    public function destroy(Curso $curso){

        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
