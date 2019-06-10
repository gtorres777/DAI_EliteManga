@extends('layouts.app')

@section('content')
<div class="container-fluid between" style="width:100%; height:100%;">
        <section>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-xl-12">
                    <a class="btn btn-primary  mt-5" href="{{ url('/Productos')}}" role="button">Productos</a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-xl-12">
                <div class="row">
                    <div class="col-5">
                        <li class="col-12 col-sm-12 col-md-12 col-xl-12  ">
                            <article class="anime">
                            <figure class="img-fluid ">
                            <h2 class="title text-white card bg-dark py-2">Nombre de Producto</h2>
                                    <img src="/images/captura1.jpg" class="rounded img-fluid  bg-dark" width="100%" alt="Ai Shite Night "></figure>
                                        
                            </article>
                        </li>
                    </div>
                
                    <div class="col-6 card ">
                        <div class="">
                            <ul class="list-unstyled row pt-4 ">
                                <li class="col-12 col-sm-12 col-md-12 col-xl-3 ">
                              
                                            <img src="/images/imagen1.jpg" class="rounded img-fluid  bg-dark" width="100%" alt="Ai Shite Night ">
                                            
                                    </article>
                                </li>
                                <li class="col-12 col-sm-12 col-md-12 col-xl-3  ">
                                   
                                 
                                            <img src="/images/imagen2.jpg" class="rounded img-fluid  bg-dark" width="100%" alt="Ai Shite Night ">
                                        
                                  
                                </li>
                                <li class="col-12 col-sm-12 col-md-12 col-xl-3  ">
                              

                                            <img src="/images/imagen5.jpg" class="rounded img-fluid  bg-dark" width="100%" alt="Ai Shite Night ">
                                                
                                    
                                </li>
                                <li class="col-12 col-sm-12 col-md-12 col-xl-3  ">
                                  
                                            <img src="/images/imagen4.jpg" class="rounded img-fluid  bg-dark" width="100%" alt="Ai Shite Night ">
                                            
                                  
                                </li>
                                
                            </ul>    
                            <div class="col-12">
                                <h4 class="">Ingrese tarjeta:</h4>
                            </div>
                            
                                <input type="text" class="form-control col-2 bg-white" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                <input type="text" class="form-control col-2 bg-white" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                <input type="text" class="form-control col-2 bg-white" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                <input type="text" class="form-control col-2 bg-white offset-md-1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                <br>
                                <br>
                                <p class="py-4 pl-4 pr-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium odit earum hic, dignissimos necessitatibus 
                                    fuga qui unde animi laboriosam nobis numquam ratione placeat cum et ipsum aliquid quae voluptate! Dolorem sint voluptas fugit, soluta 
                                    porro optio dolorum corrupti iure eveniet hic suscipit delectus adipisci necessitatibus perspiciatis odio, quis enim velit.</P>
                        
                            <a href="" class="btn btn-dark">
                                Comprar
                            </a>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
        </section>
</div>
@endsection
