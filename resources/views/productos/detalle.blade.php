@extends('layouts.app')

@section('content')
    <h1>{{ $producto->nombre }}</h1>
    <p>{{ $producto->descripcion }}</p>
    <p>Precio: ${{ $producto->precio }}</p>
@endsection