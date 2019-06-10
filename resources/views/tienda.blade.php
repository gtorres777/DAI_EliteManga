@extends('layouts.app')
@section('content')

<div class="container-fluid between"  style="background-color:#00001a">
        <section>
        <div class="py-1"></div>
                <div class="header my-4 fluid" style="background-color:black">
                    <h2 class="title fa-fire "  style="color:white" >Tienda</h2>
                </div>
            <div class="row">
              <div class="col-12">
                <ul class="list-unstyled row">
                    <li class="col-6 col-sm-4 col-md-2 col-xl-3">
                        <article class="anime">
                            <a href="{{ url('/seleccion') }}">
                                <div class="thumb">
                                    <figure class="fa-play-circle img-fluid"><img src="/images/animes.jpg"  width="100%" alt="Omohide Poro-Poro"></figure>
                                </div>
                            <h3 class="title text-white">Omohide Poro-Poro</h3>
                            </a>
                        </article>
                    </li>
                    <li class="col-6 col-sm-4 col-md-2 col-xl-3">
                        <article class="anime">
                            <a href="/anime/ai-shite-night">
                                <div class="thumb">
                                    <figure class="fa-play-circle"><img src="/images/animes.jpg"  width="100%" alt="Ai Shite Night "></figure>
                                </div>
                                <h3 class="title text-white">Ai Shite Night </h3>
                            </a>
                        </article>
                    </li>
                    <li class="col-6 col-sm-4 col-md-2 col-xl-3">
                        <article class="anime">
                            <a href="/anime/flcl-alternative">
                                <div class="thumb">
                                    <figure class="fa-play-circle"><img src="/images/animes.jpg"  width="100%" alt="FLCL Alternative"></figure>
                                </div>
                                <h3 class="title text-white">FLCL Alternative</h3>
                            </a>
                        </article>
                    </li>
                    <li class="col-6 col-sm-4 col-md-2 col-xl-3">
                            <article class="anime">
                                <a href="/anime/omohide-poroporo">
                                    <div class="thumb">
                                        <figure class="fa-play-circle"><img src="/images/animes.jpg"  width="100%" alt="Omohide Poro-Poro"></figure>
                                    </div>
                                <h3 class="title text-white">Omohide Poro-Poro</h3>
                                </a>
                            </article>
                        </li>
                        <li class="col-6 col-sm-4 col-md-2 col-xl-3">
                            <article class="anime">
                                <a href="/anime/ai-shite-night">
                                    <div class="thumb">
                                        <figure class="fa-play-circle"><img src="/images/animes.jpg"  width="100%" alt="Ai Shite Night "></figure>
                                    </div>
                                    <h3 class="title text-white">Ai Shite Night </h3>
                                </a>
                            </article>
                        </li>
                        <li class="col-6 col-sm-4 col-md-2 col-xl-3">
                            <article class="anime">
                                <a href="/anime/flcl-alternative">
                                    <div class="thumb">
                                        <figure class="fa-play-circle"><img src="/images/animes.jpg"  width="100%" alt="FLCL Alternative"></figure>
                                    </div>
                                    <h3 class="title text-white">FLCL Alternative</h3>
                                </a>
                            </article>
                        </li>
                        <li class="col-6 col-sm-4 col-md-2 col-xl-3">
                        <article class="anime">
                            <a href="/anime/omohide-poroporo">
                                <div class="thumb">
                                    <figure class="fa-play-circle"><img src="/images/animes.jpg"  width="100%" alt="Omohide Poro-Poro"></figure>
                                </div>
                            <h3 class="title text-white">Omohide Poro-Poro</h3>
                            </a>
                        </article>
                    </li>
                    <li class="col-6 col-sm-4 col-md-2 col-xl-3">
                        <article class="anime">
                            <a href="/anime/ai-shite-night">
                                <div class="thumb">
                                    <figure class="fa-play-circle"><img src="/images/animes.jpg"  width="100%" alt="Ai Shite Night "></figure>
                                </div>
                                <h3 class="title text-white">Ai Shite Night </h3>
                            </a>
                        </article>
                    </li>
                    <li class="col-6 col-sm-4 col-md-2 col-xl-3">
                        <article class="anime">
                            <a href="/anime/flcl-alternative">
                                <div class="thumb">
                                    <figure class="fa-play-circle"><img src="/images/animes.jpg"  width="100%" alt="FLCL Alternative"></figure>
                                </div>
                                <h3 class="title text-white">FLCL Alternative</h3>
                            </a>
                        </article>
                    </li>
                    <li class="col-6 col-sm-4 col-md-2 col-xl-3">
                        <article class="anime">
                            <a href="/anime/omohide-poroporo">
                                <div class="thumb">
                                    <figure class="fa-play-circle"><img src="/images/animes.jpg"  width="100%" alt="Omohide Poro-Poro"></figure>
                                </div>
                            <h3 class="title text-white">Omohide Poro-Poro</h3>
                            </a>
                        </article>
                    </li>
                    <li class="col-6 col-sm-4 col-md-2 col-xl-3">
                        <article class="anime">
                            <a href="/anime/ai-shite-night">
                                <div class="thumb">
                                    <figure class="fa-play-circle"><img src="/images/animes.jpg"  width="100%" alt="Ai Shite Night "></figure>
                                </div>
                                <h3 class="title text-white">Ai Shite Night </h3>
                            </a>
                        </article>
                    </li>
                    <li class="col-6 col-sm-4 col-md-2 col-xl-3">
                        <article class="anime">
                            <a href="/anime/flcl-alternative">
                                <div class="thumb">
                                    <figure class="fa-play-circle"><img src="/images/animes.jpg"  width="100%" alt="FLCL Alternative"></figure>
                                </div>
                                <h3 class="title text-white">FLCL Alternative</h3>
                            </a>
                        </article>
                    </li>  
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
