@extends('layouts.app')

@section('title')
    Editar
@endsection

@section('content')

    <h1 class="text-center">Editar vigilante</h1>

    <form action="{{ route('user.update',$user) }}" method="POST">
        @method('PUT')
        @include('user.formUser')
        <a class="btn btn-info" href="{{route('user.index')}}">Regresar</a>
    </form>

@endsection