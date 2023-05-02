@extends('layouts.plantilla');

@section('title', 'Curso'.$curso);

@section('content')
    {{--  <h1>Esta es la pag del curso: <?php echo $curso; ?></h1>  --}}
    <h1>Esta es la pag del curso: {{$curso}}</h1>  {{--  forma de reemplazar el codigo PHP para invocar una variable  --}}
@endsection