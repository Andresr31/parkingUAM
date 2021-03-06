@extends('layouts.app')

@section('title', 'ParkingUAM - Parqueaderos')

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
           @if (count($parking_histories)==0)
            <div class="alert alert-danger my-2" role="alert">
               No se encuentran registros para la fecha seleccionada
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
             </div>
           @endif
            <h4 class="card-title h2 text-center py-3">Historial de parqueos</h4>
            <div class="col-md-9 mr-auto ml-auto">
                <div class="row">
                    <a href="{{route('parking_history.create')}}"
                        class="btn btn-outline-light btn-block">{{ __('Registrar ingreso') }}</a>
                </div>
                <hr class="bg-light">
                <div>
                    <form action="{{route('parking_history.filter')}}" method="POST" class="row mt-2">
                        @csrf
                        <input type="date" id="date" name="date" value="{{date('Y-m-d')}}" max="{{date('Y-m-d')}}" class="col btn btn-outline-secondary mr-4" />
                        <button type="submit" class="col btn btn-outline-light btn-block">Filtrar por fecha</button>   
                    </form>
                </div>
            </div>
            <div class="table-responsive col-md-10 mr-auto ml-auto py-3">
                <table class="table text-dark table-light">
                    <thead class="thead-dark bg-dark text-light">
                        <td>
                            Id
                        </td>
                        <td>
                            Placa
                        </td>
                        <td>
                            Parqueadero
                        </td>
                        <td>
                            Posicion
                        </td>
                        <td>
                            Pagado
                        </td>
                        <td>
                            Fecha
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
                                {{$parking_history->spot->parking_lot->name}}
                            </td>
                            <td>
                                {{$parking_history->spot->position}}
                            </td>             
                            <td>
                                @if ($parking_history->paid == 1)
                                    Si
                                @else
                                    No
                                @endif
                            </td>
                            <td>
                                {{$parking_history->created_at}}
                            </td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{route('parking_history.show', $parking_history)}}"><i class="fas text-dark fa-eye icon"></i></a> |
                                @role('admin')  
                                    <a class="btn btn-sm btn-warning" href="{{route('parking_history.edit', $parking_history)}}"><i class="fas text-dark fa-edit icon"></i></a> |
                                    <button data-toggle="modal" data-target="#eliminarModal" data-id="{{$parking_history->id}}" class="btn btn-sm btn-danger" type="button"><i class="fas text-dark fa-trash-alt icon"></i></button>
                                @endrole
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{$parking_histories->links()}}
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
