
@extends('layouts.app')

@section('content')
<div class="back">
    <div class="container py-4 ml-auto mr-auto">
        <div class="row">
            @role('admin')
            <div class="col-sm-8 text-center ml-auto mr-auto">
            <div class="card card-dark bg-dark text-light">
                <div class="card-body">
                <h4 class="card-title text-center h2">Usuarios</h4>
                <p class="card-text text-center">Gestionar usuarios</p>
                <a href="{{route('user.index')}}" class="btn btn-outline-secondary btn-block">Ver</a>
                </div>
            </div>
            </div>
            <div class="col-sm-8 pt-4 text-center ml-auto mr-auto">
            <div class="card card-dark bg-dark text-light">
                <div class="card-body">
                <h4 class="card-title text-center h2">Parqueaderos</h4>
                <p class="card-text text-center">Gestiona Parqueaderos</p>
                <a href="{{route('parking_lot.index')}}" class="btn btn-outline-secondary btn-block">Ver</a>
                </div>
            </div>
            </div>
            @endrole
            <div class="col-sm-8 pt-4 text-center ml-auto mr-auto">
                <div class="card card-dark bg-dark text-light">
                    <div class="card-body">
                    <h4 class="card-title text-center h2">Ingresos</h4>
                    <p class="card-text text-center">Gestiona ingresos</p>
                    <a href="{{route('parking_history.index')}}" class="btn btn-outline-secondary btn-block">Ver</a>
                    </div>
                </div>
                </div>
        </div>
    </div>
</div>
@endsection
