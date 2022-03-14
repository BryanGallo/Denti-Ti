@extends('layouts.app')
@section('content')
    {{-- <p>{{ $odontologia }}</p> --}}
    <article class="contenido-paciente container">
        <h1 class="text-center mb-4">{{ $odontologia ->nombre }} {{ $odontologia ->apellido }} </h1>
        <div class="imagen-paciente ">
            <img class="w-100 rounded "  src="/storage/{{$odontologia->imagen}}" alt="no carga">
        </div>
        <div class="paciente-data mt-3">
            <p>
                <span style="color: rgb(80, 80, 255) !important;font-weight: bold" >Categoria: </span>
                <span>{{ $odontologia->categoriaOdontologia->categoria}}</span>
            </p>
            <p>
                <span style="color: rgb(80, 80, 255) !important;font-weight: bold">Doctor a Cargo: </span>
                <span>{{ $odontologia->doctorPaciente->name }}</span>
            </p>
            <p>
                <span style="color: rgb(80, 80, 255) !important;font-weight: bold">Hora de creacion</span>
                <span>{{date('d-m-Y',strtotime($odontologia->created_at))}}</span>
            </p>
            <div class="informacion" >
                <h2 class="" style="color: rgb(80, 80, 255) !important;font-weight: bold">Diagnostico</h2>
                <span>{!!$odontologia->info !!}</span>
            </div>
            <div class="informacion">
                <span class="my-3 text-primary" style="color: rgb(80, 80, 255) !important;font-weight: bold">Contacto Paciente: </span>
                <span>{{ $odontologia->celular}}</span>
            </div>
        </div>
    </article>
@endsection
