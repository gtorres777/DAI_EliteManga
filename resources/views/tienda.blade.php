@extends('layouts.app')
@section('content')

<div class="container-fluid between"  style="background-color:white">
        <section>
        <div class="py-1"></div>
                <div class="header my-4 fluid row justify-content-center" style="background-color:black">
                    <h1 class="tiendita" style="color:white" >Tienda</h1>
                </div>
            <div class="row">
              <div class="col-12">
                <ul class="list-unstyled row">
                    @foreach( $productos as $producto)
                    <li class="col-6 col-sm-4 col-md-2 col-xl-3 pt-4">
                        <article class="anime">
                            <a href="{{ action('ProductoController@show', $producto->id) }}">
                                <div class="overlayinn-border">
                                    <figure class="img-fluid "><img class="imagen" alt="overlay" src="{{ asset('productos/' . $producto->imgProducto) }}"  width="100%" height="337px" ></figure>
                                </div> 
                                <h3 class="title text-dark">{{ $producto->nombre_producto }}</h3>
                                
                            
                            </a>
                        </article>
                        <a class="btn btn-success" href="{{ action('CarritoController@agregar', $producto->id)}}" role="button">Añadir al carrito</a>
                    </li>
                    @endforeach  
                </ul>
                </div>
                <ul class="pagination justify-content-center">
    <li class="page-item-fluid disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
                </section>
                </div>
                <nav aria-label="Page navigation example">
  

</div>
@endsection
