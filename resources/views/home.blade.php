@extends('layouts.plantilla'); {{--  <!-- importo el arch plantilla.blade.php -->  --}}

{{--  <!-- le asigno contenido a las partes q cambian en cada vista -->  --}}
@section('title', 'Home');  {{--  <!-- es el title DEL <head> de c/arch html  -->  --}}

<!-- como acá pueden ir más de una linea de codigo SE hace así -->
@section('content')

<h1>Bienv al Proy PHP-Laravel-Cursos</h1>

@endsection()


{{--  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    
</body>
</html>  --}}