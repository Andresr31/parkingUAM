@extends('layouts.app')

@section('content')
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
	</div> --}}
	<!-- Styles -->
	<link href="{{ asset('css/login.css') }}" rel="stylesheet">
	<div class="contenedor">
			<div class="container h-100">
				<div class="d-flex justify-content-center h-100">
					<div class="user_card">
						<div class="d-flex justify-content-center">
							<div class="brand_logo_container">
							<img src="{{ asset('images/logoParking.png')}}" class="brand_logo " alt="Logo">
							</div>
                        </div>
                        
						<div class="d-flex justify-content-center form_container py-2">
							<form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="input-group mb-3">
                                    <h3 class="titulo ml-auto mr-auto">Parking UAM</h3>
                                </div>
								<div class="input-group mb-3">
									<div class="input-group-append">
										<span class="input-group-text"><i class="fa fa-user"></i></span>
									</div>
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Usuario" autofocus>

                                {{-- @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
								</div>
								<div class="input-group mb-2">
									<div class="input-group-append">
										<span class="input-group-text"><i class="fa fa-key"></i></span>
									</div>
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="current-password">

									{{-- @error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror --}}
								</div>
								{{-- <div class="form-group">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customControlInline">
										<label class="custom-control-label" for="customControlInline">Recordar</label>
									</div>
								</div> --}}
							<button type="submit" name="button" class="btn login_btn"><span><i class="fa fa-sign-in mr-3"></i></span>Entrar</button>
							<div class="mt-4">
								<div class="d-flex justify-content-center links">
									<a href="#" class="link text-dark">¿Olvidaste la contraseña?</a>
								</div>
							</div>
						</div>
							</form>
						</div>
				
					</div>
				</div>
			</div>
		</div>

@endsection
