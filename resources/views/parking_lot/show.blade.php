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
                        <a class="btn btn-sm btn-info" href="{{route('parking_spot.show', $parking_spot)}}">Ver</a>
                        <a class="btn btn-sm btn-warning" href="{{route('parking_spot.edit', $parking_spot)}}">Editar</a>
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
          <p>¿Esta seguro que desea eliminar el espacio?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
            <form id="formDelete" method="POST" action="{{route('parking_spot.destroy', 0)}}" data-action="{{route('parking_spot.destroy', 0)}}">
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
            modal.find('.modal-title').text('Estas eliminando el espacio con id: ' + id);
        })
    }
</script>

@endsection