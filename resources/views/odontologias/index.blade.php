@extends('layouts.app')
@section('content')
@section('botones')
    <div class="container mb-3 d-flex">
        <a href="{{ route('odontologia.create') }}"> <button class='btn btn-primary ml-auto text-white'>CREAR
                PACIENTE</button></a>
    </div>
@endsection
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio Denti Ti</title>
</head>

<body>
    <h2 class="text-center mb-5"><strong>Pacientes </strong></h2>

    <div class="container mb-3">
        <label for="buscar">Buscar</label>
        <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Ej:Debbie Flores">
    </div>
    <div class="container">
        <table class='table table-bordered text-center'>
            <thead class='thead-dark'>
                <tr>
                    <th>ID</th>
                    <th>Nombre Apellido</th>
                    <th>Edad</th>
                    <th>Telefono</th>
                    <th>Categoria</th>
                    <th>Ver</th>
                    <th>Editar Historia Clinica</th>
                    <th>Eliminar Historia Clinica</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userPacientes as $userPaciente)
                    <tr>
                        <td>{{ $userPaciente->id }}</td>
                        <td>{{ $userPaciente->nombre }} {{ $userPaciente->apellido }}</td>
                        <td>{{ $userPaciente->cedula }}</td>
                        <td>{{ $userPaciente->celular }}</td>
                        <td>{{ $userPaciente->categoriaOdontologia->categoria }}</td>
                        <td><a href="{{ route('odontologia.show', ['odontologia' => $userPaciente->id]) }}"
                                class='btn btn-success d-block mb-1' data-toggle="modal"
                                data-target="#actualizar">Ver</a></td>
                        <td><a href="{{ route('odontologia.edit', ['odontologia' => $userPaciente->id]) }}"
                                class='btn btn-primary d-block mb-1' data-toggle="modal" data-target="#actualizar">/</a>
                        </td>
                        <td>
                            {{-- <form method="POST" action="{{ route('odontologia.destroy', ['odontologia' => $userPaciente->id]) }}"> --}}
                            @csrf
                            @method('delete')
                            {{-- <input type="submit" class="btn btn-danger d-block mb-1 w-100" value="X"> --}}
                            <eliminar-paciente odontologia-id={{$userPaciente->id}}></eliminar-paciente>
                            {{-- </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{$userPacientes}} --}}
    </div>
</body>

</html>
@endsection
