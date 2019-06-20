@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-transparent mt-5">
                <div class="card-header info"><h1 class="text-white textbox">{{ __('Registro') }}</h1></div>

                <div class="card-body info ">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                           

                            <div class="col-md-12 offset-md-1">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror bg-white text-dark" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('Nombres y Apellidos') }}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row">
                           

                            <div class="col-md-12 offset-md-1">
                                <input id="fechanacimiento" type="text" class="form-control @error('fechanacimiento') is-invalid @enderror bg-white text-dark" name="fechanacimiento" value="{{ old('fechanacimiento') }}" required autocomplete="fechanacimiento" autofocus placeholder="{{ __('Fecha Nacimiento (yyyy-mm-dd)') }}">

                                @error('fechanacimiento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                           

                            <div class="col-md-12 offset-md-1">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror bg-white text-dark" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('E-Mail') }}"> 

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row ">
                            

                            <div class="col-md-12 offset-md-1">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror bg-white text-dark" name="password" required autocomplete="new-password " placeholder="{{ __('Contraseña') }}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                      
                            <div class="col-md-12 offset-md-1">
                                <input id="password-confirm" type="password" class="form-control bg-white text-dark" name="password_confirmation" required autocomplete="new-password"  placeholder="{{ __('Confirmar contraseña') }}">
                            </div>
                        </div>

                        <div class="form-group  mb-0">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="boton boton1">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
