@extends('layouts.plantilla');

{{--  titulo header  --}}
@section('title', 'Cursos');

{{--  body  --}}
@section('content');
    <h1>Bienv a la pag principal</h1>
    <a href="{{route('curso.create')}}">Crear curso</a> {{--  con las {{}} es para escribir codigo PHP  --}}
    <br>
    {{--  mapeo los registros de la DB  --}}
    <ul>
        @foreach ($cursos as $item)
            <li>
                <a href="{{route('cursos.show', $item->id)}}">{{$item->name}}</a>
            </li>
        @endforeach
    </ul>

    {{$cursos->links()}} {{--  paginado automatico  --}}
@endsection


