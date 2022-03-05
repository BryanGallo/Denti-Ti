@extends('layouts.app')
{{-- Estilos --}}
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css"
        integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
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
    <form action={{ route('odontologia.store') }} method="post" enctype="multipart/form-data" novalidate >
        @csrf
        <div class="container " id="datos">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control @error('nombre') is-invalid
            @enderror" id="nombre"
                name="nombre" placeholder=" ej: Bryan" value="{{ old('nombre') }}">
            @error('nombre')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido"
                class="form-control @error('apellido') is-invalid
            @enderror" placeholder=" ej: Orozco"
                value="{{ old('apellido') }}">
            @error('apellido')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label>Cédula</label>
            <input type="text" name="cedula" id="cedula"
                class="form-control @error('cedula') is-invalid
            @enderror" placeholder=" ej: 1721302857"
                {{ old('cedula') }}>
            @error('cedula')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="correo">Correo</label>
            <input type="text" id="correo" name="correo"
                class="form-control @error('correo') is-invalid
            @enderror"
                placeholder=" ej: tucorreo@hotmail.com" {{ old('correo') }}>
            @error('correo')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="direc">Dirección</label>
            <input type="text" id="direc" name="direc" class="form-control @error('direc') is-invalid @enderror"
                placeholder=" ej: Quicentro Sur" placeholder=" ej: Beaterio" {{ old('direc') }}>
            @error('direc')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="celular">Celular</label>
            <input type="text" id="celular" name="celular"
                class="form-control @error('celular') is-invalid
            @enderror" placeholder=" ej: 0987654321">
            @error('celular')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label>Diagnostico</label>
            <input type="hidden" id="info" name="info"
                class="form-control @error('info') is-invalid
            @enderror" {{ old('info') }}>
            <trix-editor input='info'
                class="form-control @error('info')
            is-invalid @enderror">
            </trix-editor>
            @error('info')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            {{-- {{$categorias}} --}}
        </div>
        <hr class="container">
        <div class="container form-group ">
            <label for="categoria">Categoria del paciente</label>
            <select class="form-control @error('categoria') is-invalid @enderror" name="categoria" id="categoria">
                <option value="" disabled selected>Seleccione la Categoria</option>
                @foreach ($categorias as  $categoria)
                    <option value={{ $categoria->id}} {{ old('categoria') == $categoria->id ? 'selected' : '' }}>
                        {{ $categoria->categoria }}</option>
                @endforeach
            </select>
            @error('categoria')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="container form-group">
            <label for="imagen">Imagen</label>
            <input type="file"
                name="imagen" id="imagen" class="form-control @error('imagen')
                is-invalid @enderror">
            @error('imagen')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="container form-group">
            <button type="submit" class='btn btn-success ml-auto text-white mt-2'>CREAR PACIENTE</button>
        </div>
    </form>
    {{-- Scripts --}}
    @section('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"
                integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ=="
                crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    @endsection
</body>

</html>
@endsection
