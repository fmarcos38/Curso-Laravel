@extends('layouts.plantilla'); 

@section('title', 'Contactanos');  


@section('content')    

    <h1>Dejanos un msj</h1>

    <form action="{{route('contactanos.store')}}" method="POST">
        {{--  el PUTO toquen VA ADENTRO del FORM !!!!  --}}
        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name"/>
        </label>
        <br>
        {{--  imprimo SI hay error  --}}
        @error('name')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <br>

        <label>
            Email:
            <br>
            <input type="text" name="email"/>
        </label>
        <br>
        @error('email')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <br>

        <label>
            Mensaje:
            <br>
            <textarea name="mensaje" rows="4"></textarea>
        </label>
        <br>
        @error('mensaje')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <br>

        <button type="submit">Enviar msj</button>
    </form>

    {{--  imprimo alerta si se envió el mail  --}}
    {{--  SI existe la variable session con 'info'(la creo yo en el archivo ControllerContactanos)  --}}
    @if (session('info'))
        <scrip>
            alert("{{session('info')}}")
        </scrip>
    @endif
        
    @endif
@endsection()

