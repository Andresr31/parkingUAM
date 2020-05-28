@extends('layouts.app')

@section('title', 'ParkingUAM - Vigilantes')

@section('content')

<div class="back">
    <div class="container py-4">
        <div class="card bg-dark col-md-12 mr-auto ml-auto">
            @if (session('status'))
            <div class="alert alert-success my-2" role="alert">
               {{session('status')}}
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
             </div>
           @endif
            <h4 class="card-title h2 text-center py-3">Usuarios</h4>
            <div class="row col-md-9 mr-auto ml-auto">
                @role('admin')
                <div class="col">
                    <a href="{{route('user.create')}}"
                        class="btn btn-outline-light btn-block">{{ __('Registrar usuario') }}</a>
                </div>
                @endrole
            </div>

            <div class="table-responsive col-md-10 mr-auto ml-auto py-3">
                <table class="table text-dark table-light">
                    <thead class="thead-dark bg-dark text-light">
                        <tr>
                            <td>
                                Id
                            </td>
                            <td>
                                Nombre
                            </td>
                            <td>
                                Teléfono
                            </td>
                            <td>
                                Tipo de dentifiación
                            </td>
                            <td>
                                Identifiación
                            </td>
                            <td>
                                Acciones
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>
                                {{$user->id}}
                            </td>
                            <td>
                                {{$user->name}}
                            </td>
                            <td>
                                {{$user->phone}}
                            </td>
                            <td>
                                {{$user->identification_type}}
                            </td>
                            <td>
                                {{$user->identification_number}}
                            </td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{route('user.show', $user)}}"><i class="fas text-dark fa-eye icon"></i></a> |
                                <a class="btn btn-sm btn-warning" href="{{route('user.edit', $user)}}"><i class="fas text-dark fa-edit icon"></i></a> |
                                <button data-toggle="modal" data-target="#eliminarModal" data-id="{{$user->id}}" class="btn btn-sm btn-danger" type="button"><i class="fas text-dark fa-trash-alt icon"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{$users->links()}}
        </div>
            
            
    </div>
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
          <p>¿Desea eliminar el vigilante seleccionado?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
            <form id="formDelete" method="POST" action="{{route('user.destroy', 0)}}" data-action="{{route('user.destroy', 0)}}">
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
            modal.find('.modal-title').text('Estas eliminando el vigilante con id: ' + id);
        })
    }
</script>

@endsection
