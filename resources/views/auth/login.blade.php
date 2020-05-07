@extends('layouts.app')

@section('content')
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
