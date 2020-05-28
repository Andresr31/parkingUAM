@extends('layouts.app')

@section('title', 'Crear Parqueadero')

@section('content')
<div class="back">
    <div class="container py-4">
        <div class="col-md-9 mr-auto ml-auto">
            @include("layouts.validation-error")
            <div class="card-body bg-dark card-dark">
                <h4 class="card-title h2 text-center">Registrar Parqueadero</h4>
                <form action="{{ route('parking_lot.store') }}" class="col-md-10 my-4 text-light mr-auto ml-auto" method="POST">
                    @include('parking_lot._form')
                    <div class="form-group">
                        <a class="btn btn-block btn-outline-light" href="{{route('parking_lot.index')}}">Regresar</a>
                    </div>
                </form>
                      
            </div>
        </div>
    </div>
</div>

@endsection