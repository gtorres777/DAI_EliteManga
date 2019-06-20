@extends('layouts.app')

@section('content')
<div class="container-fluid between"  style="background-color:rgba(0,0,0,0.7)"> 
        <section>
            <div class="header py-4 ">
                @if(isset($nombre))
                <h1 class="text-white"><span class="mif-cloudy4 mif-1x" style="color: darkRed;"> </span> Resultados de: {{ $nombre }}</h1>
                @else
                <h1 class="text-white"><span class="mif-cloudy4 mif-1x" style="color: darkRed;"> </span> Ultimos Mangas</h1>
                @endif
            </div>
            <div class="row">
                <div class="col-12  col-sm-12 col-md-9   col-xl-9 card bg-transparent">
                    <ul class="list-unstyled row">
                    @foreach($mangas as $manga)
                        <li class="col-6 col-sm-6 col-md-4 col-xl-3">
                            <article class="anime" id="{{ $manga->id }}">
                                <a href="{{ action('MangaController@show', $manga->id) }}">
                                    <div class="thumb">
                                        <figure class=" img-fluid "><img src="{{ asset('images/' . $manga->imgManga) }}" class="rounded" width="100%" alt="Omohide Poro-Poro" height="337px"></figure>
                                    </div>
                                    <h2 class="text-dark">{{ $manga->nombre_manga }}</h2>
                                </a>
                            </article>
                            <a class="btn btn-success" href="{{ action('MangaController@agregar', [$manga->id, $manga->nombre_manga])}}" role="button">Añadir a favoritos</a>
                            <div>
                            <br>
                            <br>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-xl-3">
                    <aside class="">
                        <div class="">
                            <section>
                                
                                <h3 class="titulo text-white "> <span class="mif-folder mif-1x pr-2" style="color: darkRed;"> </span>Generos</h3>
                                    <div class="caja-scroll">
                                        <ul class="categories list-unstyled">
                                            
                                            <li><a href="{{ action('MangaController@genero', 'accion' )}}" class="dropdown-item texts colorh"><span class="mif-folder-open mif-1x pr-2" > </span>Acción</a></li>
                                            <li><a href="{{ action('MangaController@genero', 'drama' )}}" class="dropdown-item  texts colorh"><span class="mif-folder-open mif-1x pr-2" > </span>Drama</a></li>
                                            <li><a href="{{ action('MangaController@genero', 'romance' )}}" class="dropdown-item  texts colorh"><span class="mif-folder-open mif-1x pr-2" > </span>Romance</a></li>
                                            <li><a href="{{ action('MangaController@genero', 'gore' )}}" class="dropdown-item texts colorh" ><span class="mif-folder-open mif-1x pr-2" > </span>Gore</a></li>
                                            <li><a href="{{ action('MangaController@genero', 'comedia' )}}" class="dropdown-item texts colorh"><span class="mif-folder-open mif-1x pr-2" > </span>Comedia</a></li>
                                            <li><a href="{{ action('MangaController@genero', 'shonen' )}}" class="dropdown-item texts colorh"><span class="mif-folder-open mif-1x pr-2" > </span>Shonen</a></li>
                                            <li><a href="{{ action('MangaController@genero', 'shoujo' )}}" class="dropdown-item texts colorh"><span class="mif-folder-open mif-1x pr-2" > </span>Shoujo</a></li>
                                            <li><a href="{{ action('MangaController@genero', 'magia' )}}" class="dropdown-item texts colorh"><span class="mif-folder-open mif-1x pr-2" > </span>Magia</a></li>
                                            <li><a href="{{ action('MangaController@genero', 'aventura' )}}" class="dropdown-item texts colorh"><span class="mif-folder-open mif-1x pr-2" > </span>Aventura</a></li>
                                            <li><a href="{{ action('MangaController@genero', 'ecchi' )}}" class="dropdown-item texts colorh"><span class="mif-folder-open mif-1x pr-2" > </span>Ecchi</a></li>
                                            <li><a href="{{ action('MangaController@genero', 'harem' )}}" class="dropdown-item texts colorh"><span class="mif-folder-open mif-1x pr-2" > </span>Harem</a></li>
                                        </ul>
                                    </div>
                            </section>
                            <br>
                            <section>
                                
                                <h3 class="titulo text-white "> <span class="mif-folder mif-1x pr-2" style="color: darkRed;"> </span>Recomendados</h3>
                                    <div class="caja-scroll">
                                        <ul class="categories list-unstyled">
                                            @foreach($mangas as $manga)
                                               @if ( (strval(date('d-m-Y'))) == (date('d-m-Y', strtotime($manga->created_at))) ) 
                                            <li>
                                                <a href="{{ action('MangaController@show', $manga->id) }}" class="dropdown-item texts colorh">
                                                    <span class="mif-folder-open mif-1x pr-2" > </span>{{ $manga->nombre_manga }}
                                                </a>
                                            </li>
                                                @endif
                                            
                                            @endforeach
                                            
                                            
                                        </ul>
                                    </div>
                            </section>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    
</div>
@endsection
