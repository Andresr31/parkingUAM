@extends('layouts.app')

@section('title', 'Crear vigilante')

@section('content')

    <h1 class="text-center">Registrar vigilante</h1>

    <form action="{{ route('user.store') }}" method="POST">
        @include('user.formUser')
        <a class="btn btn-info" href="{{route('user.index')}}">Regresar</a>
    </form>

@endsection