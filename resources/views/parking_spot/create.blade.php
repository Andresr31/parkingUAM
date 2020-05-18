@extends('layouts.app')

@section('title', 'Crear Espacio')

@section('content')

    <h1 class="text-center">Registrar Espacio</h1>

    @include("layouts.validation-error")
    <form action="{{ route('parking_spot.store') }}" method="POST">
        @include('parking_spot._form')
        <a class="btn btn-info" href="{{route('parking_lot.index')}}">Regresar</a>
    </form>

@endsection