@extends('layouts.app')
@section('content')
{{-- {{$perfil->perfilUser}} --}}
<div class="container">
    <div class="row">
        <div class="col-md-5">
            {{-- imagen --}}
        </div>
        <div class="col-md-7">
            {{-- chef --}}
            <h2 class="text-center mb-2 text-primary">
                {{$perfil->perfilUser->name}}
            </h2>

        </div>
    </div>
</div>
@endsection
