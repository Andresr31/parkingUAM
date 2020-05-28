
    @csrf
    <div class="form-group">
        <label for="name">Id Parqueadero</label>
        <select class="form-control" name="parking_lot_id" id="parking_lot_id">
            @foreach ($parking_lots as $parking_lot)
                <option value="{{$parking_lot->id}}">{{$parking_lot->name}}</option>
            @endforeach
        </select>
        
        <label for="name">Posición</label>
        <input type="text" class="form-control" value="{{old('name',$parking_spot->position)}}" name="position" id="position" placeholder="">
        @error('name')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="form-group pt-3">
        <button type="submit" class="btn btn-block btn-outline-success">Registrar</button>
    </div>
