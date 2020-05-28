@extends('layouts.app')

@section('title')
    Editar
@endsection

@section('content')

    <h1 class="text-center">Editar Registro</h1>

    <form action="{{ route('parking_history.update',$parking_history) }}" method="POST">
        @method('PUT')
        @include('parking_histories._form')
        <a class="btn btn-info" href="{{route('parking_history.index')}}">Regresar</a>
    </form>

@endsection