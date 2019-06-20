@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Carrito de compras</div>
            <div class="card-body">
                @if(count($car)==0)
                No tiene productos añadidos al carrito
                @endif

                @if(count($car))
                <div class="table-responsive">
                <table class="table table-stripped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th>Quitar</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($car as $item)
                        <tr>
                            <td><img src="{{asset('productos/' . $item->imgProducto)}}" style="width:50px; height:50px;"></td>
                            <td>{{$item->nombre_producto}}</td>
                            <td>S/. {{ number_format($item->precio,2)}}</td>
                            <td>
                            <form action="{{ action('CarritoController@update', $item->id) }}" method="GET">
                                @csrf
                            <input type="number" name="stock" value="{{$item->stock}}" min="1" max="10">
                            <input type="submit" value="Calcular">
                            </form> 
                            </td>
                            <td>{{number_format($item->precio*$item->stock,2)}}</td>
                            <td><a href="{{ action('CarritoController@delete', $item->id)}}" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>

                        </tr>
                            @endforeach
                        </tbody>
                </table>
                            @isset($total)
                            <div class="card-footer"><h3>Total a pagar: s/. {{ number_format($total,2)}}</h3></div>
                            @endisset
                        </div>
                        @else
                        <h4 style="text-align: center; color:#bc4b00;font-size:20px"></h4>
                        @endif 
                    </div>
                    <div class="card-footer">
                        
                        <a class="btn btn-primary" href="{{ action('CompraController@compras') }}">Comprar</a>

                        <a href="{{ route('trash')}}" class="btn btn-danger"><i class="fa fa-remove"></i></a>
                    </div>
                </div>
            </div>
        </div>

@endsection
