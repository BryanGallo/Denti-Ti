@extends('layouts.app')
@section('content')
@section('botones')
    <div class="container mb-3 d-flex">
        <a href="{{ route('odontologia.index') }}"> <button class='btn btn-primary ml-auto text-white'>Inicio</button></a>
    </div>
@endsection
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Paciente</title>
</head>

<body>
    <h2 class="text-center mb-5"><strong>Crear Paciente</strong></h2>
    <form action={{route('odontologia.store')}} novalidate method="post">
        @csrf
        <div class="container" id="datos">
            <label>Nombre</label>
            <input type="text" class="form-control @error('nombre') is-invalid
            @enderror" id="nombre" name="nombre" placeholder=" ej: Bryan" value="{{old('nombre')}}">
            @error('nombre')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
            <label>Apellido</label>
            <input type="text" name="apellido" id="apellido" class="form-control" placeholder=" ej: Orozco">
            <label>Cédula</label>
            <input type="text" name="cedula" id="cedula" class="form-control" placeholder=" ej: Bryan">
        </div>
        <div class="container" id="datas">
            <label>Correo</label>
            <input type="text" id="correo" name="correo" class="form-control" placeholder=" ej: tucorreo@hotmail.com">
            <label>Dirección</label>
            <input type="text" id="direc" name="direc" class="form-control" placeholder=" ej: Bryan" placeholder=" ej: Beaterio">
            <label>Celular</label>
            <input type="text" id="celular" name="celular" class="form-control" placeholder=" ej: 0987654321">
            <button type="submit" class='btn btn-success ml-auto text-white mt-2'>CREAR PACIENTE</button>
        </div>
    </form>
</body>

</html>
@endsection
