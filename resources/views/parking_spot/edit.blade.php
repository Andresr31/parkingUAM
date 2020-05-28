@extends('layouts.app')

@section('title')
    Editar
@endsection

@section('content')
<div class="back">
    <div class="container py-4">
        <div class="col-md-9 mr-auto ml-auto">
            @include("layouts.validation-error")
            <div class="card-body bg-dark card-dark">
                <h4 class="card-title h2 text-center">Editar Parqueadero</h4>
                <form action="{{ route('parking_spot.update',$parking_spot) }}" class="col-md-10 my-4 text-light mr-auto ml-auto" method="POST">
                    @method('PUT')
                    @include('parking_spot._form')
                    <div class="form-group">
                        <a class="btn btn-block btn-outline-light" href="{{url()->previous()}}">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection