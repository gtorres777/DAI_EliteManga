@extends('layouts.app')
@section('content')

<div class="container-fluid between"  style="background-color:#00001a">
        <section>
        <div class="py-1"></div>
                <div class="header my-4 fluid" style="background-color:#0d1a26">
                    <h2 class="title row justify-content-center mt-3" style="color:white" >Productos de {{ $nombre }}</h2>
                </div>
            <div class="row">
              <div class="col-12">
                <ul class="list-unstyled row">
                    @foreach($mangas as $manga)
                    <li class="col-6 col-sm-4 col-md-2 col-xl-4">
                        <article class="anime">
                            <a href="{{ action('ProductoController@show', $manga->id) }}">
                                <div class="thumb">
                                    <figure class="fa-play-circle img-fluid"><img src="{{ asset('productos/' . $manga->imgProducto) }}"  width="100%" alt="Omohide Poro-Poro"></figure>
                                </div>
                            <h3 class="title text-white">{{ $manga->nombre_producto }}</h3>
                            </a> 
                        </article>
                    </li>
                    @endforeach
                </ul>
                </div>
                </section>
                </div>
                <nav aria-label="Page navigation example">
</div>
@endsection
