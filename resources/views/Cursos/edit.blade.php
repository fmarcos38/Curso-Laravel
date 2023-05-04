@extends('layouts.plantilla');

{{--  titulo head html  --}}
@section('Editar Curso');

{{--  body html  --}}
@section('content')
    <h1>Aquí podras editar un Curso</h1>

    <form action="{{route('cursos.update', $curso)}}" method="POST">

        @csrf {{--  token de seguridad  --}}

        {{--  directiva para aclarar q el metodo es PUT  --}}
        @method('put');    

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
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
            <textarea name="description" rows="5">{{old('description', $curso->description)}}</textarea>
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
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
        </label>
        {{--  imprimir el msj de error anta validación  --}}
        @error('categoria');
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection