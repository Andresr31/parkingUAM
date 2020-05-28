
    @csrf
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" value="{{old('name',$parking_lot->name)}}" name="name" id="name" placeholder="Nombre">
        @error('name')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="form-group pt-3">
        <button type="submit" class="btn btn-block btn-outline-success">Registrar</button>
    </div>
