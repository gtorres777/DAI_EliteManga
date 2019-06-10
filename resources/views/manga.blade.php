@extends('layouts.app')

@section('content')
<div class="container-fluid between"  style="background-color:#00001a">
<section>
    <div class="row justify-content-center ">
    <div class="card mb-12 bg-white" style="max-width: 80rem;">
      <div class="row no-gutters">
        <div class="col-md-5">
          <img src="/images/maga1.png" class="card-img">
        </div>
        <div class="col-md-7">
          <div class="card-body">
            <h5 class="card-title">Dangaronpa</h5>
            <p class="card-text">asdasdbdbdsvjkdnndkj dasdasdasd as fad  dv f b bg n gn fg g
            b d b db d  fbv df  fdb d s v s s bfbfb  fbfbssb s  sd s b sdb sd bs b s   sd vs
            b sd b fb d bdv  n d b drjtyj   ddfggwrgsgw   wr g wg rwg w gw  wgw wgwg w g we
            g  g wh w w r gwg  wg wg wgwgwgwe g  s e jrj g t h   wr gw g w w vw g w w wrh w
            rw w b wrwrwn dndfn dn d t dgndn dn tt tht et h  hdf t dndferh r </p>
            <div class='row'>
              <div class='col-6'>
                <a class="btn btn-dark" href="{{ url('/Compras')}}" role="button">Capitulos</a>
              </div>
              <div class='col-6'>
                <a class="btn btn-dark" href="{{ url('/Compras')}}" role="button">Productos</a>
              </div>
          </div>
        </div>
      </div>
    </div>
</div>
<ul class="list-unstyled row">
        <li class="col-12 col-sm-12 col-md-12 col-xl-12" >
            <article class="anime">
               <a href="{{ url('/manga')}}">
                   <div class="thumb">
                        <figure class="fa-play-circle img-fluid"><img src="/images/danga.jpg"  width="100%" alt="Omohide Poro-Poro"></figure>
                    </div>
               </a>
            </article>
        </li>
</section>
</div>

@endsection