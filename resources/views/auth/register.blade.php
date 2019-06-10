@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-transparent mt-5">
                <div class="card-header info"><h1 class="text-white textbox">{{ __('Register') }}</h1></div>

                <div class="card-body info ">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                           

                            <div class="col-md-12 offset-md-1">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror bg-white" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('Name') }}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                           

                            <div class="col-md-12 offset-md-1">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror bg-white" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('E-Mail Address') }}"> 

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row ">
                            

                            <div class="col-md-12 offset-md-1">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror bg-white" name="password" required autocomplete="new-password " placeholder="{{ __('Password') }}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                      
                            <div class="col-md-12 offset-md-1">
                                <input id="password-confirm" type="password" class="form-control bg-white" name="password_confirmation" required autocomplete="new-password"  placeholder="{{ __('Confirm Password') }}">
                            </div>
                        </div>

                        <div class="form-group  mb-0">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="boton boton1">
                                    {{ __('Register') }}
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
