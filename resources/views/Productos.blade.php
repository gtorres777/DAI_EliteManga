@extends('layouts.app')
@section('content')
<div class="container-fluid between"  style="background-color:white">
        <section>
        <div class="py-1"></div>
                <div class="header my-4 fluid row justify-content-center" style="background-color:black">
                    <h1 class="productos" style="color:white" >Productos de {{ $nombre }}</h1>
                </div>
            <div class="row">
              <div class="col-12">
                <ul class="list-unstyled row">
                @foreach($mangas as $manga)
                    <li class="col-6 col-sm-4 col-md-2 col-xl-3 pt-4">
                        <article class="anime">
                            <a href="{{ action('ProductoController@show', $manga->id) }}">
                                <div class="overlayinn-border">
                                    <figure class="img-fluid "><img class="imagen" alt="overlay" src="{{ asset('productos/' . $manga->imgProducto) }}"  width="100%" height="337px" ></figure>
                                </div> 
                                <h3 class="title text-dark">{{ $manga->nombre_producto }}</h3>
                                
                            
                            </a>
                        </article>
                        <a class="btn btn-success" href="{{ action('CarritoController@agregar', $manga->id)}}" role="button">Añadir al carrito</a>
                    </li>
                    @endforeach  
                </ul>
                </div>
               

                </section>
                </div>
                <nav aria-label="Page navigation example">
  

</div>
@endsection
