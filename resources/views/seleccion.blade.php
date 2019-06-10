@extends('layouts.app')

@section('content')
<div class="container-fluid between"  style="background-color:#00001a">
        <section>
        <div class="py-1"></div>
        <ul class="list-unstyled row">
            <li class="col-12 col-sm-6 col-md-6 col-xl-4">
                <a class="btn btn-dark" href="{{ url('/Productos')}}" role="button">Productos</a>
            </li>
        </ul>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-xl-6">
                        <div class="thumb">
                            <img src="/images/fondo2.jpg"  width="100%" alt="Omohide Poro-Poro">
                        </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-6">
                <div class="row justify-content-center mt-3">
                <div class="card border-success mb-5" style="max-width: 75%;">
                <div class="card-header bg-transparent border-success"><h2>Funku Pop!-Death Note - L</h2></div>
                    <div class="card-body text-primary">
                          <h3 class="card-title">Caracteristicas</h3>
                          <div class="card-text">
                              <p> Precio: 600$</p>
                              <p> Fabricante: Funko</p>
                              <p> Franquicia:Death Note</p>
                              <p> Personaje: L</p>
                              <p> Version del Personaje: None</p>
                              <p> Edad minima estimada: 15 años</p>
                              <p> Tematica: Anime Manga</p>
                          </div>
                        <div class="card-footer bg-transparent border-success"><a class="btn btn-dark" href="{{ url('/Compras')}}" role="button">Comprar</a></div>
                    </div>
                </div>
                </div>
                </div>
                </div>
        </div>    
    </section>
</div>
@endsection
