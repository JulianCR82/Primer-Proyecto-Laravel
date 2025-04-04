@extends('layout')

@section('title','categorias')

@section('content')

<h1>Categorias Disponibles</h1>
<table>
    <tbody>
        @foreach($categorias as $categoria)
        <li>
            <strong>Nombre:</strong> {{ $categoria->nombre }} <br>
            <strong>Descripción:</strong> {{ $categoria->descripcion }}
        </li>
        @endforeach
    </tbody>
</table>


@endsection
