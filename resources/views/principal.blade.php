@extends('layouts.app')

@section('content')
<div class="container-fluid between"  style="background-color:#00001a">
        
        <section>
            
            <div class="header py-4 ">
                <h1 class="text-white"><span class="mif-cloudy4 mif-1x" style="color: darkRed;"> </span>  Ultimos Animes</h1>
            </div>
            <div class="row">
                <div class="col-12  col-sm-12 col-md-9   col-xl-9 card bg-transparent">
                    <ul class="list-unstyled row">
                        <li class="col-6 col-sm-6 col-md-4 col-xl-3">
                            <article class="anime">
                                <a href="/anime/omohide-poroporo">
                                    <div class="thumb">
                                        <figure class=" img-fluid "><img src="/images/naruto.jpg" class="rounded" width="100%" alt="Omohide Poro-Poro"></figure>
                                    </div>
                                    <h3 class="title1">Omohide Poro-Poro</h3>
                                </a>
                            </article>
                        </li>
                        <li class="col-6 col-sm-6 col-md-4 col-xl-3">
                            <article class="anime">
                                <a href="/anime/ai-shite-night">
                                    <div class="thumb">
                                        <figure><img src="/images/naruto.jpg" class="rounded" width="100%" alt="Ai Shite Night "></figure>
                                    </div>
                                    <h4 class="title1">Omohide Poro-Poro</h4>
                                </a>
                            </article>
                        </li>
                        <li class="col-6 col-sm-6 col-md-4 col-xl-3">
                            <article class="anime">
                                <a href="/anime/omohide-poroporo">
                                    <div class="thumb">
                                        <figure class="img-fluid"><img src="/images/naruto.jpg" class="rounded" width="100%" alt="Omohide Poro-Poro"></figure>
                                 
                                    <h4 class="title1">Omohide Poro-Poro</h4>
                                    </div>
                                </a>
                            </article>
                        </li>
                        <li class="col-6 col-sm-6 col-md-4 col-xl-3">
                            <article class="anime">
                                <a href="/anime/ai-shite-night">
                                    <div class="thumb">
                                        <figure class="img-fluid"><img src="/images/naruto.jpg" class="rounded" width="100%" alt="Ai Shite Night "></figure>
                                    </div>
                                    <h4 class="title text-muted">Omohide Poro-Poro</h4>
                                </a>
                            </article>
                        </li>
                        <li class="col-6 col-sm-6 col-md-4 col-xl-3">
                            <article class="anime">
                                <a href="/anime/omohide-poroporo">
                                    <div class="thumb">
                                        <figure class="img-fluid"><img src="/images/naruto.jpg" class="rounded" width="100%" alt="Omohide Poro-Poro"></figure>
                                    </div>
                                    <h4 class="title text-muted">Omohide Poro-Poro</h4>
                                </a>
                            </article>
                        </li>
                        <li class="col-6 col-sm-6 col-md-4 col-xl-3">
                            <article class="anime">
                                <a href="/anime/ai-shite-night">
                                    <div class="thumb">
                                        <figure class="img-fluid"><img src="/images/naruto.jpg" class="rounded" width="100%" alt="Ai Shite Night "></figure>
                                    </div>
                                    <h4 class="title text-muted">Omohide Poro-Poro</h4>
                                </a>
                            </article>
                        </li>
                        <li class="col-6 col-sm-6 col-md-4 col-xl-3">
                            <article class="anime">
                                <a href="/anime/omohide-poroporo">
                                    <div class="imagen">
                                        <figure class="img-fluid"><img src="/images/naruto.jpg" class="rounded imag " width="100%" alt="Omohide Poro-Poro"></figure>
                                    </div>
                                    <h4 class="title text-muted">Omohide Poro-Poro</h4>
                                </a>
                            </article>
                        </li>
                        <li class="col-6 col-sm-6 col-md-4 col-xl-3  ">
                            <article class="anime">
                                <a href="/anime/ai-shite-nigh ">
                                    <div class="thumb ">
                                        <figure class="img-fluid ">
                                            <img src="/images/naruto.jpg" class="rounded img-fluid  bg-dark" width="100%" alt="Ai Shite Night "></figure>
                                    </div>
                                    <h4 class="title text-muted">Omohide Poro-Poro</h4>
                                </a>
                            </article>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-xl-3">
                    <aside class="">
                        <div class="">
                            <section>
                                
                                <h3 class="titulo text-white "> <span class="mif-folder mif-1x pr-2" style="color: darkRed;"> </span>Generos</h3>
                                    <div class="caja-scroll">
                                        <ul class="categories list-unstyled">
                                            <li>
                                                <a href="/directorio?genero=accion" class="dropdown-item texts colorh">
                                                    <span class="mif-folder-open mif-1x pr-2" > </span>
                                                    Acción
                                                </a>
                                            </li>
                                            <li><a href="/directorio?genero=artes-marciales" class="dropdown-item texts colorh"><span class="mif-folder-open mif-1x pr-2" > </span>Artes Marciales</a></li>
                                            <li><a href="/directorio?genero=aventura" class="dropdown-item  texts colorh"><span class="mif-folder-open mif-1x pr-2" > </span>Aventuras</a></li>
                                            <li><a href="/directorio?genero=carreras" class="dropdown-item  texts colorh"><span class="mif-folder-open mif-1x pr-2" > </span>Carreras</a></li>
                                            <li><a href="/directorio?genero=ciencia-ficcion" class="dropdown-item texts colorh" ><span class="mif-folder-open mif-1x pr-2" > </span>Ciencia Ficción</a></li>
                                            <li><a href="/directorio?genero=comedia" class="dropdown-item texts colorh"><span class="mif-folder-open mif-1x pr-2" > </span>Comedia</a></li>
                                            <li><a href="/directorio?genero=demencia" class="dropdown-item texts colorh"><span class="mif-folder-open mif-1x pr-2" > </span>Demencia</a></li>
                                            <li><a href="/directorio?genero=demonios" class="dropdown-item texts colorh"><span class="mif-folder-open mif-1x pr-2" > </span>Demonios</a></li>
                                            <li><a href="/directorio?genero=deportes" class="dropdown-item texts colorh"><span class="mif-folder-open mif-1x pr-2" > </span>Deportes</a></li>
                                            <li><a href="/directorio?genero=drama" class="dropdown-item texts colorh"><span class="mif-folder-open mif-1x pr-2" > </span>Drama</a></li>
                                            <li><a href="/directorio?genero=ecchi" class="dropdown-item texts colorh"><span class="mif-folder-open mif-1x pr-2" > </span>Ecchi</a></li>
                                            <li><a href="/directorio?genero=escolares" class="dropdown-item texts colorh"><span class="mif-folder-open mif-1x pr-2" > </span>Escolares</a></li>
                                            <li><a href="/directorio?genero=espacial" class="dropdown-item texts colorh"><span class="mif-folder-open mif-1x pr-2" > </span>Espacial</a></li>
                                            <li><a href="/directorio?genero=fantasia" class="dropdown-item texts colorh"><span class="mif-folder-open mif-1x pr-2" > </span>Fantasía</a></li>
                                            <li><a href="/directorio?genero=harem" class="dropdown-item texts colorh"><span class="mif-folder-open mif-1x pr-2" > </span>Harem</a></li>
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
