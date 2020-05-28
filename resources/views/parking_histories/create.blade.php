@extends('layouts.app')

@section('title', 'Registrar ingreso')

@section('content')
    
    <h1 class="text-center">Registrar ingreso</h1>

    @include("layouts.validation-error")
    <form action="{{ route('parking_history.store') }}" method="POST">
        @include('parking_histories._form')
        <a class="btn btn-info" href="{{route('parking_history.index')}}">Regresar</a>
    </form>

@endsection