@extends('layouts.app')

@section('title', 'ParkingUAM - Parqueaderos')

@section('content')

<h1 class="text-center">Historial de parqueos</h1>

<a class="btn btn-success btn-block mt-3 mb-3" href="{{route('parking_history.create')}}">Registrar ingreso</a>

<table class="table">
    <thead>
        <td>
            Id
        </td>
        <td>
            Placa
        </td>
        <td>
            Pagado
        </td>
        <td>
            Acciones
        </td>
    </thead>
    <tbody>
        @foreach($parking_histories as $parking_history)
        <tr>
            <td>
                {{$parking_history->id}}
            </td>
            <td>
                {{$parking_history->plate}}
            </td>
            <td>
                @if ($parking_history->paid == 1)
                    Si
                @else
                    No
                @endif
            </td>
            <td>
                <a class="btn btn-sm btn-info" href="{{route('parking_history.show', $parking_history)}}">Ver</a>
                @role('admin')  
                    <a class="btn btn-sm btn-warning" href="{{route('parking_history.edit', $parking_history)}}">Editar</a>
                    <button data-toggle="modal" data-target="#eliminarModal" data-id="{{$parking_history->id}}" class="btn btn-sm btn-danger" type="button">Eliminar</button>
                @endrole
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$parking_histories->links()}}

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
            <form id="formDelete" method="POST" action="{{route('parking_history.destroy', 0)}}" data-action="{{route('parking_history.destroy', 0)}}">
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
            modal.find('.modal-title').text('Estas eliminando el registro de parqueo con id: ' + id);
        })
    }
</script>

@endsection
