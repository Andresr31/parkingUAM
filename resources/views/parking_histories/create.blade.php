@extends('layouts.app')

@section('title', 'Registrar ingreso')

@section('content')
<div class="back">
    <div class="container py-4">
        <div class="col-md-9 mr-auto ml-auto">
            @include("layouts.validation-error")
            <div class="card-body bg-dark card-dark">
                <h4 class="card-title h2 text-center">Registrar ingreso</h4>

                <form action="{{ route('parking_history.store') }}" class="col-md-10 my-4 text-light mr-auto ml-auto" method="POST">
                    @include('parking_histories._form')
                    <div class="form-group">
                        <a class="btn btn-block btn-outline-light" href="{{route('parking_history.index')}}">Regresar</a>
                    </div>
                    
                </form>
                 
            </div>
        </div>
    </div>
</div>

@endsection