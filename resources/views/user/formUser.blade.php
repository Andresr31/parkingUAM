
    @csrf
    <div class="form-group">
        <label for="name">Nombre completo</label>
        <input type="text" class="form-control" value="{{old('name',$user->name)}}" name="name" id="name" placeholder="Nombre completo">
        @error('name')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="email">Correo electrónico</label>
        <input type="text" class="form-control" value="{{old('email',$user->email)}}" name="email" id="email" placeholder="Correo electrónico">
        @error('email')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="identification_type">Tipo de identifiación</label>
        <select class="form-control" name="identification_type" id="identification_type">
            <option value="1">Cédula</option>
            <option value="2">Pasaporte</option>
        </select>
        @error('identification_type')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="identification_number">Número de identificación</label>
        <input type="text" class="form-control" value="{{old('identification_number',$user->identification_number)}}" name="identification_number" id="identification_number" placeholder="Número de identificación">
        @error('identification_number')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="role">Rol</label>
        <select class="form-control" name="role" id="role">
            <option value="">-- Seleccione un rol --</option>
            @foreach(\App\Role::cursor() as $role)
            <option value="{{$role->name}}" {{($user->hasRole($role->name))?'selected':''}}>{{ucfirst($role->name)}}</option>
            @endforeach
        </select>
        @error('role')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="phone">Teléfono</label>
        <input type="text" class="form-control" value="{{old('phone',$user->phone)}}" name="phone" id="phone" placeholder="Teléfono">
        @error('phone')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="password">Contraseña</label>

        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <small class="text-danger">{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="password-confirm">Confirmar contraseña</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirm" required autocomplete="new-password">
    </div>

    <input type="submit" value="Registrar" class="btn btn-success">
