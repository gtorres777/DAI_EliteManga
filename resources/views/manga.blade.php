@extends('layouts.app')

@section('content')
<div class="container-fluid "  style="background-color:white">
  <section>
  <div class="container py-4">
<div class="row">
<aside class="col-12 col-sm-4 col-lg-3 col-xl-4">
<div class="thumb">
<img src="{{ asset('images/' . $manga->imgManga) }}" class="rounded" width="80%" alt="Omohide Poro-Poro" height="80%">
</div>
</aside>
<aside class="col-12 col-sm-8 col-lg-9 col-xl-8">
<h1 class="text-dark">{{ $manga->nombre_manga }}</h1>
<p class="text-dark">{{ $manga->descripcion}}</p>
</aside>
              
              <div style="margin-left:4%; margin-top:3%"> 
                <a class="btn btn-dark" href="{{ route('especificos', $manga->nombre_manga)}}" role="button">Productos</a>
                @isset( Auth::user()->rol )
                <a class="btn btn-dark" href="{{ route('agregarcapitulo', $manga->id)}}" role="button">Agregar capitulo</a>
                @endisset
              </div>

</div>
      <div class="col-12 col-sm-12 col-md-12 col-xl-12 py-5 " style="min-height:100% " >
            <section>
              <h3 class="titulo text-dark ">Capitulos</h3>
                  <div class="caja-scroll">
                    <ul class="categories list-unstyled">
                         @foreach ($manga->capitulos as $capitulo)
                        
                        <li><a href="{{ route('capitulos', [$capitulo->id, $manga->id])}}" class="dropdown-item texts colorh">{{ $capitulo->numero_capitulo }} </a></li>
                        @endforeach
                    </ul>
                  </div>
            </section>
          </div>
  </section>
</div>
@endsection