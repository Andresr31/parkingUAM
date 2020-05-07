@extends('layouts.app')

@section('title', 'ParkingUAM - Vigilantes')

@section('content')
<div class="container py-4">
    <div class="form-group">
        <label for="name">Nombre completo</label>
        <input readonly type="text" class="form-control" value="{{$user->name}}" name="name" id="name">
    </div>

    <div class="form-group">
        <label for="email">Correo electrónico</label>
        <input readonly type="text" class="form-control" value="{{$user->email}}" name="email" id="email">
    </div>

    <div class="form-group">
        <label for="identification_type">Tipo de identifiación</label>
        <input readonly type="text" class="form-control" value="{{$user->identification_type}}">

    </div>

    <div class="form-group">
        <label for="identification_number">Número de identificación</label>
        <input readonly type="text" class="form-control" value="{{$user->identification_number}}" name="identification_number" id="identification_number">
    </div>

    <div class="form-group">
        <label for="role">Rol</label>
        <input readonly type="text" class="form-control" value="{{$user->role}}">
    </div>

    <div class="form-group">
        <label for="phone">Teléfono</label>
        <input readonly type="text" class="form-control" value="{{$user->phone}}" name="phone" id="phone">
    </div>

    <a class="btn btn-info btn-block my-4" href="{{route('user.index')}}">Regresar</a>

</div>
@endsection