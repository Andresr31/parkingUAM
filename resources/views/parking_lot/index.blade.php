@extends('layouts.app')

@section('title', 'ParkingUAM - Parqueaderos')

@section('content')

<h1 class="text-center">Parqueaderos</h1>

<a class="btn btn-success btn-block mt-3 mb-3" href="{{route('parking_lot.create')}}">Registrar parqueadero</a>

<table class="table">
    <thead>
        <td>
            Id
        </td>
        <td>
            Nombre
        </td>
        <td>
            Estado
        </td>
        <td>
            Acciones
        </td>
    </thead>
    <tbody>
        @foreach($parking_lots as $parking_lot)
        <tr>
            <td>
                {{$parking_lot->id}}
            </td>
            <td>
                {{$parking_lot->name}}
            </td>
            <td>
                {{$parking_lot->status}}
            </td>
            <td>
                <a class="btn btn-sm btn-info" href="{{route('parking_lot.show', $parking_lot)}}">Ver</a>
                <a class="btn btn-sm btn-warning" href="{{route('parking_lot.edit', $parking_lot)}}">Editar</a>
                <button data-toggle="modal" data-target="#eliminarModal" data-id="{{$parking_lot->id}}" class="btn btn-sm btn-danger" type="button">Eliminar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$parking_lots->links()}}

<div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>¿Esta seguro que desea eliminar el parquedero y sus espacios?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
            <form id="formDelete" method="POST" action="{{route('parking_lot.destroy', 0)}}" data-action="{{route('parking_lot.destroy', 0)}}">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
      </div>
    </div>
</div>

<script>
    window.onload=function(){
        $('#eliminarModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id');
            action = $('#formDelete').attr('data-action').slice(0,-1);
            var modal = $(this);
            $('#formDelete').attr('action', action+id);
            modal.find('.modal-title').text('Estas eliminando el parqueadero con id: ' + id);
        })
    }
</script>

@endsection
