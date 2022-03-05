@extends('layouts.app')
@section('content')
    {{-- <p>{{ $odontologia }}</p> --}}
    <article class="contenido-paciente">
        <h1 class="text-center mb-4">{{ $odontologia ->nombre }} {{ $odontologia ->apellido }} </h1>
        <div class="imagen-paciente">
            <img class="w-100" src="/storage/{{$odontologia->imagen}}" alt="no carga">
        </div>
        <div class="paciente-data">
            <p>
                <span class="font-weight-bold text-primary">Categoria: </span>
                <span>{{ $odontologia->categoriaOdontologia->categoria}}</span>
            </p>
            <p>
                <span class="font-weight-bold text-primary">Doctor a Cargo: </span>
                <span>{{ $odontologia->doctorPaciente->name }}</span>
            </p>
            <div class="informacion">
                <h2 class="my-3 text-primary">Diagnostico</h2>
                <span>{{ $odontologia->ingredientes }}</span>
            </div>
        </div>
    </article>
@endsection
