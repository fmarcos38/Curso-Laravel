@extends('layouts.plantilla');

@section('title', 'Curso '.$curso->name);

@section('content')
    {{--  <h1>Esta es la pag del curso: <?php echo $curso; ?></h1>  --}}
    <h1><strong>Bienvenido al curso: </strong>{{$curso->name}}</h1>  {{--  forma de reemplazar el codigo PHP para invocar una variable  --}}
    <p><strong>Categoría: </strong>{{$curso->categoria}}</p>
    <p><strong>Descripción: </strong>{{$curso->description}}</p>

    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br>
    <a href="{{route('curso.edit', $curso->id)}}">Editar curso</a>

    {{--  btn eliminar  --}}
    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        
        @csrf
        @method('delete')

        <button type="submit">Eliminar</button>
    </form>
@endsection