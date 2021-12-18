@extends('layouts.app')
@section('content')
@section('botones')
<div class="container mb-3 d-flex">
    <a href="{{route('odontologia.create')}}" > <button class='btn btn-primary ml-auto text-white'>CREAR PACIENTE</button></a>
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
                        <th>Ver</th>
                        <th>Editar Historia Clinica</th>
                        <th>Eliminar Historia Clinica</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bryan Gallo</td>
                        <td>26</td>
                        <td>0995607826</td>
                        <td><button class='btn btn-success' data-toggle="modal" data-target="#actualizar">Ver</button></td>
                        <td><button class='btn btn-primary' data-toggle="modal" data-target="#actualizar">/</button></td>
                        <td><button class='btn btn-danger'>X</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Alberto Gallo</td>
                        <td>26</td>
                        <td>0995607826</td>
                        <td><button class='btn btn-success' data-toggle="modal" data-target="#actualizar">Ver</button></td>
                        <td><button class='btn btn-primary' data-toggle="modal" data-target="#actualizar">/</button></td>
                        <td><button class='btn btn-danger'>X</button></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </body>

    </html>
@endsection
