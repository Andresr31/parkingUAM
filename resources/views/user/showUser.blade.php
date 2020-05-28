@extends('layouts.app')

@section('title', 'ParkingUAM - Vigilantes')

@section('content')
<div class="back">
    <div class="container py-4">
        <div class="col-md-9 mr-auto ml-auto">
            <div class="card-body bg-dark card-dark">
                <h4 class="card-title h2 text-center">Ver registro</h4>
                    <div class="col-md-10 my-4 text-light mr-auto ml-auto">
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

                        <a class="btn btn-block mr-auto ml-auto btn-outline-light mt-3" href="{{route('user.index')}}">Regresar</a>
                    </div>
                </div>
                
        
        </div>
    </div>
    </div>

@endsection