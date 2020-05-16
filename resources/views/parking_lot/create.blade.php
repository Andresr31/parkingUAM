@extends('layouts.app')

@section('title', 'Crear Parqueadero')

@section('content')

    <h1 class="text-center">Registrar Parqueadero</h1>

    @include("layouts.validation-error")

    <form action="{{ route('parking_lot.store') }}" method="POST">
        @include('parking_lot._form')
        <a class="btn btn-info" href="{{route('parking_lot.index')}}">Regresar</a>
    </form>

@endsection