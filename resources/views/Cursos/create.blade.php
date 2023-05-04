@extends('layouts.plantilla');

{{--  titulo head html  --}}
@section('Crear Curso');

{{--  body html  --}}
@section('content')
    <h1>Aquí podras crear un Curso</h1>

    <form action="{{route('curso.store')}}" method="POST">

        @csrf {{--  token de seguridad  --}}

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        {{--  imprimir el msj de error anta validación  --}}
        @error('name');
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Description:
            <br>
            <textarea name="description" id="" cols="30" rows="10">{{old('description')}}</textarea>
        </label>
        {{--  imprimir el msj de error anta validación  --}}
        @error('description');
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Categoría:
            <br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        {{--  imprimir el msj de error anta validación  --}}
        @error('categoria');
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror


        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection