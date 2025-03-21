@extends('layout')

@section('title', 'Lista de Personas')

@section('content')
    <h1>Lista de Personas</h1>
    <ul>
        @foreach($personas as $persona)
            <li>
                <strong>Nombre:</strong> {{ $persona->nombre }} <br>
                <strong>Edad:</strong> {{ $persona->edad }} <br>
                <strong>Rol:</strong> {{ $persona->rol }}
            </li>
            <hr>
        @endforeach
    </ul>
@endsection
