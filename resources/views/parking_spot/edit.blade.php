@extends('layouts.app')

@section('title')
    Editar
@endsection

@section('content')

    <h1 class="text-center">Editar Parqueadero</h1>

    <form action="{{ route('parking_spot.update',$parking_spot) }}" method="POST">
        @method('PUT')
        @include('parking_spot._form')
        <a class="btn btn-info" href="{{url()->previous()}}">Regresar</a>
    </form>

@endsection