@extends('layouts.app')

@section('title', 'ParkingUAM - Parqueaderos')

@section('content')
<div class="container py-4">
    <div class="form-group">
        <label for="name">Id</label>
        <input readonly type="text" class="form-control" value="{{$parking_spot->id}}" name="name" id="name">
    </div>

    <div class="form-group">
        <label for="email">Posisión</label>
        <input readonly type="text" class="form-control" value="{{$parking_spot->position}}" name="status" id="status">
    </div>

  
    <a class="btn btn-info btn-block my-4" href="{{url()->previous()}}">Regresar</a>

</div>

@endsection