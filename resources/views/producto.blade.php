@extends('layouts.app')

@section('content')
<div class="container-fluid between"  style="background-color:white">
        <section>
        <div class="py-1"></div>
        
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-6 col-xl-5">
                        <div class="thumb ">
                            <img class="imagen float-right" src="{{ asset('productos/' . $producto->imgProducto) }}"  width="100%" alt="Omohide Poro-Poro"  style="border-width:1px;">
                        </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-6">
                <div class="row justify-content-center mt-3">
                <div class="card border-success mb-5" style="max-width: 75%;">
                <div class="card-header bg-dark border-success text-white"><h2>{{ $producto->nombre_producto }}</h2></div>
                    <div class="card-body bg-dark text-white">
                          <h3 class="card-title">Informacion</h3>
                          <div class="card-text">
                              <p> Precio: {{ $producto->precio }}</p>
                              <p> Stock: {{ $producto->stock }}</p>
                              <p> Caracteristicas: {{ $producto->caracteristicas }}</p>
                          </div>
                        <div class="card-footer bg-transparent border-success row justify-content-center">
                        <a class="btn btn-success" href="{{ action('CompraController@compras')}}" role="button">Comprar</a>
                        <a class="btn btn-success" href="{{ action('CarritoController@agregar', $producto->id)}}" role="button">Añadir al carrito</a>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                </div>
        </div>    
    </section>
</div>
@endsection
