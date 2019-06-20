@extends('layouts.app')

@section('content')

<div class="container-fluid x " >
<div class="row" >
    <div class="col-1 col-sm-1 col-md-1 col-xl-1"></div>
    <div class="col-10 col-sm-10 col-md-10 col-xl-10" >
        <div class="row" >
            <div class="col-12 col-sm-12 col-md-5 col-xl-4 bordec" style="margin-top:3%">
                @if(isset($user->imgPerfil))
                <img src="{{ asset('usuarios/'. $user->imgPerfil )}}" alt="" class="imga">
                @else
                <img src="/usuarios/avatardefault.svg" alt="" class="imga">
                @endif
                            
                        
                <button type="button" class="btn btn-primary ml-4" data-toggle="modal" data-target="#exampleModalCenter">
                Cambiar imagen del perfil
                </button>

                <!-- Modal -->
                
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document" >
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                           
                                <div class="modal-body">
                            <form action="{{ action ('UserController@cambiarFoto', $user->id)}}" method='POST' enctype="multipart/form-data">
                                @csrf 
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Imagen de perfil</label>
                                        <input id="fotoperfil" type="file" class="form-control-file" name="fotoperfil" >
                                        
                                    </div>
                                    
                                
                                </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                        
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
                

                        
                
                <hr />
                
        
                <ul class="list-unstyled">
                    <li>
                        <a href="{{ route('perfil')}}" class="dropdown-item textu colorru">
                        <span class="mif-user mif-1x pr-2" > </span>Información
                        </a>
                    </li>
                    <li>
                        <a class="btn dropdown-item textu colorru" data-toggle="modal" data-target="#editarperfil">
                        <span class="mif-pencil mif-1x pr-2" > </span>Editar Perfil
                        </a>

                        <div class="modal fade" id="editarperfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    

                                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-10">
                        <div class="form-group">
                        <h2 class="mt-4 mb-4 tamañot">Editar Perfil</h2>
                            <hr />
                    <form method="POST" action="{{ action('UserController@update') }}">
                        @method('PUT')
                        @csrf

                        <div class="form-group row">
          

                            <div class="col-md-9">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror text-dark" placeholder= "Nombres" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                           

                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror text-dark" placeholder= "Correo" name="email" value="{{ $user->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>

                        <div class="form-group row">
                           

                            <div class="col-md-9">
                                <input id="fechanacimiento" type="text" class="form-control @error('fechanacimiento') is-invalid @enderror text-dark" placeholder= "Fecha de nacimiento" name="fechanacimiento" value="{{ $user->fecha_nacimiento }}" required autocomplete="fechanacimiento">

                                @error('fechanacimiento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>

                        <div class="form-group row">
                        
                        
                            <div class="col-md-9">
                                <input id="domicilio" type="text" class="form-control @error('domicilio') is-invalid @enderror text-dark" placeholder= "Domicilio" name="domicilio" value="{{ $user->domicilio }}" required autocomplete="domicilio" autofocus>

                                @error('domicilio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                   

                    </div>
                </div>
                <div class="col-1"></div>
            </div>

                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    </li>
                    
                    
                    <li>
                        <a href="{{ action('UserController@pedidos')}}" class="dropdown-item textu colorru">
                        <span class="mif-plus mif-1x pr-2" > </span>Pedidos
                        </a>
                    </li>

                    <li>
                        <a href="{{ action('UserController@eliminarPerfil', Auth::id()) }}" class="dropdown-item textu colorru">
                        <span class="mif-pencil mif-1x pr-2" > </span>Eliminar Perfil
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" class="dropdown-item textos colorra">
                        <span class="mif-exit mif-1x pr-2" > </span>Salir
                        </a>
                    </li>
                    
                </ul>   
            </div>
        <div class="col-12 col-sm-12 col-md-7 col-xl-8 bordec" style="margin-top:3%">

        @switch($llave)

        @case(1)
        
        <div class="row">
                <div class="col-1"></div>
                <div class="col-7 col-sm-7 col-md-4 col-xl-4">
                    <h2 class="mt-4 mb-4 tamañot">Perfil</h2>
                    <hr />
                        
                        <h3 class="tamaños">Nombres y apellidos</h3>
                        <p class="tamañoc">{{ $user->name }}</p>
                        
                        <h3 class="tamaños">Fecha de nacimiento</h3>
                        <p class="tamañoc">{{ $user->fecha_nacimiento }}</p>
                        <h3 class="tamaños">Email</h3>
                        <p class="tamañoc">{{ $user->email }}</p>
                        <h3 class="tamaños">Domicilio</h3>
                        <p class="tamañoc">{{ $user->domicilio }}</p>
                </div>
                <div class="col-7 col-sm-7 col-md-6 col-xl-6">
                <h2 class="titulo  pt-5 mb-4  tamañot"> <span class="mif-favorite  mif-1x pr-2" style="color: Red;"> </span>Lista de mangas favoritos</h2>
                
                                        <div class="caja-scroll caja1">
                                            <ul class="categories list-unstyled">
                                                
                                            @isset($user->manga_id)

                                                @foreach($user->manga_id as $key=>$valor)
                                                
                                                
                                                    
                                                <li>
                                                    <a href="{{ action('MangaController@show', $key) }}" class="dropdown-item tamaños colorh">
                                                     {{ $valor }}
                                                    </a>
                                                    <a href="{{action('MangaController@eliminarFavoritos', $key)}}" class="btn btn-primary">
                                                     Quitar
                                                    </a>
                                                </li>

                                                @endforeach
                                                    
                                              

                                            @endisset

                                            </ul>
                                        </div>
                </div>
        </div>

        @break
        
        @case(2)


            <div class="row">
                <div class="col-1"></div>
                <div class="col-10 col-sm-10 col-md-10 col-xl-10">
                    <h2 class="mt-4 mb-4 tamañot">Pedidos</h2>
                    <hr />       
                </div>
                
                
                @foreach($pedidos as $pedido)
                <ul class="list-unstyled pl-5">
                    <li>pedido</li>
                    <li>Fecha de entrega: {{$pedido->fecha_entrega['date']}} </li>
                    <li>Fecha de compra: {{$pedido->fecha_compra['date']}}</li>
                </ul>
                             
                <table class="table table-stripped table-hover table-bordered table-dark">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                @foreach($pedido->entregas as $e)
                
                            
                        <tr>
                            <td>{{$e->nombre}}</td>
                            <td>S/. {{$e->unidad}}</td>
                            <td>{{$e->cantidad}}</td>
                            <td>S/. {{$e->subtotal}}</td>
                            

                        </tr>
                @endforeach
                        </tbody>
                </table>
                @endforeach  

                
                

                

        @break

                

        

        @endswitch        

            

        
        </div>
</div>
    <div class="col-1 col-sm-1 col-md-1 col-xl-1"></div>
</div>
</div>

@endsection

