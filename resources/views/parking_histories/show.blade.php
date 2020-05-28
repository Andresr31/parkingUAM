@extends('layouts.app')

@section('title', 'ParkingUAM - Parqueaderos')

@section('content')
<div class="container py-4">
    <div class="form-group">
        <label for="name">Placa</label>
        <input readonly type="text" class="form-control" value="{{$parking_history->plate}}" name="name" id="name">
    </div>

    <div class="form-group">
        <label for="email">Usuario</label>
        <input readonly type="text" class="form-control" value="{{$user->name}}" name="status" id="status">
    </div>
    <div class="form-group">
        <label for="name">Espacio</label>
        <input readonly type="text" class="form-control" value="{{$parking_spot->position}}" name="name" id="name">
    </div>

    <div class="form-group">
        <label for="email">Pagado</label>
        <input readonly type="text" class="form-control" value="@if ($parking_history->paid == 1)Si @else No @endif" name="status" id="status">
    </div>

  
    <a class="btn btn-info btn-block my-4" href="{{url()->previous()}}">Regresar</a>

</div>

@endsection