@extends('layouts.app')

@section('title', 'ParkingUAM - Parqueaderos')

@section('content')
<div class="container py-4">
    <div class="form-group">
        <label for="name">Nombre</label>
        <input readonly type="text" class="form-control" value="{{$parking_lot->name}}" name="name" id="name">
    </div>

    <div class="form-group">
        <label for="email">Estado</label>
        <input readonly type="text" class="form-control" value="{{$parking_lot->status}}" name="status" id="status">
    </div>

    <div class="form-group">
        <label for="parking_spots">Espacios de parqueadero</label>
        <table class="table">
            <thead>
                <td>
                    Id
                </td>
                <td>
                    Posicion
                </td>
                <td>
                    Acciones
                </td>
            </thead>
            <tbody>
                @foreach($parking_spots as $parking_spot)
                <tr>
                    <td>
                        {{$parking_spot->id}}
                    </td>
                    <td>
                        {{$parking_spot->position}}
                    </td>
                    <td>
                        <a class="btn btn-sm btn-info" href="#">Ver</a>
                        <a class="btn btn-sm btn-warning" href="#">Editar</a>
                        <button data-toggle="modal" data-target="#eliminarModal" data-id="{{$parking_spot->id}}" class="btn btn-sm btn-danger" type="button">Eliminar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$parking_spots->links()}}
    </div>

    <a class="btn btn-info btn-block my-4" href="{{route('parking_lot.index')}}">Regresar</a>

</div>
@endsection