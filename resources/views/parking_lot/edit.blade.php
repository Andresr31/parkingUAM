@extends('layouts.app')

@section('title')
    Editar
@endsection

@section('content')

    <h1 class="text-center">Editar Parqueadero</h1>

    <form action="{{ route('parking_lot.update',$parking_lot) }}" method="POST">
        @method('PUT')
        @include('parking_lot._form')
        <a class="btn btn-info" href="{{route('parking_lot.index')}}">Regresar</a>
    </form>

@endsection