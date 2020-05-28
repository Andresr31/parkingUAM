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
                        <label for="name">Id</label>
                        <input readonly type="text" class="form-control" value="{{$parking_spot->id}}" name="name" id="name">
                    </div>

                    <div class="form-group">
                        <label for="email">Posisión</label>
                        <input readonly type="text" class="form-control" value="{{$parking_spot->position}}" name="status" id="status">
                    </div>

                
                    <a class="btn btn-block mr-auto ml-auto btn-outline-light mt-3" href="{{url()->previous()}}">Regresar</a>
                </div>
            </div>
            
    
    </div>
</div>
</div>


@endsection