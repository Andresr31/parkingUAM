
    @csrf
    <div class="form-group">

        <label for="name">Placa</label>
        <input type="text" class="form-control" value="{{old('name',$parking_history->plate)}}" name="plate" id="plate" placeholder="">
        @error('plate')
            <small class="text-danger">{{$message}}</small>
        @enderror

        <label for="name">Usuario</label>
        <select class="form-control" name="user_id" id="user_id">
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
        <label for="name">Posición</label>
        <select class="form-control" name="parking_spot_id" id="parking_spot_id">
            @foreach ($parking_spots as $parking_spot)
                <option value="{{$parking_spot->id}}">{{$parking_spot->position}}--{{ $parking_spot->parking_lot->name }}</option>
            @endforeach
        </select>

        <label for="name">Pagar</label>
        <select class="form-control" name="paid" id="paid">
            
            <option value="1">Si</option>
            <option value="0">No</option>
            
        </select>
    </div>

    <input type="submit" value="Registrar" class="btn btn-success">
