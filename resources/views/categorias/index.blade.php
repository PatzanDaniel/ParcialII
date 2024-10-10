@extends('layouts.app')

@section('content')
    <h1>Categorías</h1>
    <ul>
        @foreach($categorias as $categoria)
            <li><a href="{{ url('/categorias/' . $categoria->id_categoria) }}">{{ $categoria->nombre }}</a></li>
        @endforeach
    </ul>
@endsection