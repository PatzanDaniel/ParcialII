@extends('layouts.app')

@section('content')
    <h1>Productos en la Categoría: {{ $categoria->nombre }}</h1>
    <ul>
        @foreach($productos as $producto)
            <li><a href="{{ url('/productos/' . $producto->id_producto) }}">{{ $producto->nombre }}</a></li>
        @endforeach
    </ul>
@endsection