<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;//para el envio de mail
use Illuminate\Support\Facades\Mail;//para el envio de mail


class ContactanosController extends Controller
{
    //se encarga de mostrar el formulario
    public function index(){
        return view('contactanos.index');
    }

    //procesa el formulario y envía el correo electrónico
    public function store(Request $request){

        //valido los datos q vienen
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required',
        ]);

        $correo = new ContactanosMailable($request->all());//le mando al constructor de la clase la info q viene del formulario

        Mail::to('fmarcos_23@hotmail.com')->send($correo);

        //re direcciono a la ruta contactanos.index Y crea un msj
        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado con exito!!');
    }
}
