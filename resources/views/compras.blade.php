@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card bg-transparent mt-5">
                <div class="card-header info"><h1 class="text-white textbox">{{ __('Formulario de Compra') }}</h1></div>

                @switch($llave)
                @case(1)
                <div class="card-body info mt-3 ">
                    <form method="POST" action="{{action('CompraController@cambiarFormularioFinal')}} " enctype="multipart/form-data">
                    @csrf

                        <div class="form-group row">
                           
                        <div class="card-header info"><h1 class="text-white textbox">{{ __('Datos de la tarjeta') }}</h1></div>

                            <div class="col-md-12 offset-md-1">
                                <input id="numerotarjeta" type="text" class="form-control @error('numerotarjeta') is-invalid @enderror bg-white text-dark" name="numerotarjeta" value="" required autocomplete="numerotarjeta" autofocus placeholder="{{ __('Numero de tarjeta(xxxx xxxx xxxx xxxx)') }}">

                                @error('numerotarjeta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                           

                            <div class="col-md-12 offset-md-1">
                                <input id="fechaexpiracion" type="text" class="form-control @error('fechaexpiracion') is-invalid @enderror bg-white text-dark" name="fechaexpiracion" value="" required autocomplete="fechaexpiracion" placeholder="{{ __('Fecha de expiración(MM/AA)') }}"> 

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row ">
                            

                            <div class="col-md-12 offset-md-1">
                                <input id="codigoseguridad" type="text" class="form-control @error('codigoseguridad') is-invalid @enderror bg-white text-dark" name="codigoseguridad" required autocomplete="codigoseguridad " placeholder="{{ __('Código de seguridad') }}">

                                @error('codigoseguridad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row ">
                            

                            <div class="col-md-12 offset-md-1">
                                <input id="dni" type="text" class="form-control @error('password') is-invalid @enderror bg-white text-dark" name="dni" required autocomplete="dni " placeholder="{{ __('DNI') }}">

                                @error('dni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group  mb-0">
                            
                        </div>
                        <div class="form-group  mb-0">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="boton boton1">
                                    {{ __('Siguiente') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                    @break

                @case(2)

                

                <div class="card-body info mt-3">

                    <div class="form-group row">
                    
                    <div class="card-header info"><h1 class="text-white textbox">{{ __('Detalles de la compra') }}</h1></div>

                    </div>
                    <div class="form-group mb-3">

                    <div class="table-responsive">
                        <table class="table table-stripped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Subtotal</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                        @foreach($car as $item)
                                    <tr>
                                        <td><img src="{{asset('productos/' . $item->imgProducto)}}" style="width:50px; height:50px;"></td>
                                        <td>{{$item->nombre_producto}}</td>
                                        <td>S/. {{ number_format($item->precio,2)}}</td>
                                        <td>{{$item->stock}}</td>
                                        <td>{{number_format($item->precio*$item->stock,2)}}</td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                            @isset($total)
                            <div class="card-footer"><h3>Total a pagar: s/. {{ number_format($total,2)}}</h3></div>
                            @endisset
                        
                        
                    </div>

                    <h4 style="text-align: center; color:#bc4b00;font-size:20px"></h4>

                    </div>


                    <div class="form-group  mb-0">
                        <div class="col-md-4 offset-md-4">
                        
                        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        Comprar
                        </button>

                        

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            
                        <h3>Tiomanga</h3>
                            
                        </div>
                        <div class="modal-body">
                            Confirmar su Compra
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('realizarcompra')}}" class="btn btn-success" >Confirmar</a>
                            <button type="button" class="close btn btn-outline-primary" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                            
                        </div>
                        </div>
                    </div>
                    </div>
                        
                        </div>
                    </div>
                    
                    </div>

                    
                    @break

                @default
                <div class="card-body info mt-3">
                    <form method="POST" action="{{action('CompraController@cambiarFormulario')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                           
                        <div class="card-header info"><h1 class="text-white textbox">{{ __('Datos personales') }}</h1></div>

                            <div class="col-md-12 offset-md-1">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror bg-white text-dark" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus placeholder="{{ __('Nombre y Apellidos') }}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                           

                            <div class="col-md-12 offset-md-1">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror bg-white text-dark" name="email" value="{{ $user->email }}" required autocomplete="email" placeholder="{{ __('Correo electrónico') }}"> 

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row ">
                            

                            <div class="col-md-12 offset-md-1">
                                <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror bg-white text-dark" name="direccion" required autocomplete="direccion " placeholder="{{ __('Dirección') }}">

                                @error('direccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group  mb-0">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="boton boton1">
                                    {{ __('Siguiente') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                @endswitch

            </div>
        </div>
    </div>
</div>

@endsection

