@extends('layouts.app')

@section('title', 'ParkingUAM - Parqueaderos')

@section('content')
<div class="back">
    <div class="container py-4">
        <div class="col-md-9 mr-auto ml-auto">
            <div class="card-body bg-dark card-dark">
                <h4 class="card-title h2 text-center">Ver registro</h4>
                    <div class="col-md-10 my-4 text-light mr-auto ml-auto">
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
                        <input readonly type="text" class="form-control" value="{{$parking_spot->position}}--{{ $parking_spot->parking_lot->name }}" name="name" id="name">
                    </div>

                    <div class="form-group">
                        <label for="email">Pagado</label>
                        <input readonly type="text" class="form-control" value="@if ($parking_history->paid == 1)Si @else No @endif" name="status" id="status">
                    </div>
                    <a class="btn btn-block mr-auto ml-auto btn-outline-light mt-3" href="{{url()->previous()}}">Regresar</a>
                </div>
            </div>
            
    
    </div>
</div>
</div>


</div>

@endsection