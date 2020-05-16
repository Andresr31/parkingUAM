
    @csrf
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" value="{{old('name',$parking_lot->name)}}" name="name" id="name" placeholder="Nombre">
        @error('name')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <input type="submit" value="Registrar" class="btn btn-success">
