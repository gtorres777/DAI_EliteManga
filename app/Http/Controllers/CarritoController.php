<?php

namespace App\Http\Controllers;

use App\User;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    public function __construct()
    {
        
        $this->middleware('auth');
        if (!\Session::has('car')) \Session::put('car',array());
        
    }

    public function show()
    {
        $car = \Session::get('car');
        $total=$this->total();
        return view ('carrito', compact('car','total'));   
        
    }

    public function agregar($id)
    {
        
        $producto = Producto::find($id);
        $producto->stock=1;
        $car = \Session::get('car');
        $car[$producto->id]=$producto;
            
        \Session::put('car',$car);
    
        return redirect()->route('tienda',compact('car'));  
        
    }

    public function delete($id)
    {
        $car=\Session::get('car');
        unset($car[$id]);
        \Session::put('car',$car);

        return redirect()->route('carrito',compact('car'));
    }

    public function update(Request $request, $id)
    {
        
        $car=\Session::get('car');
        $car[$id]->stock=$request->get('stock');
        \Session::put('car',$car);
        
        return redirect()->route('carrito',compact('car'));     
        
    }

    public function total()
    {
        $car = \Session::get('car');
        $total = 0;
        foreach ($car as $item) {
            $total+=$item->precio*$item->stock;
        }

        return $total;
    }

    public function deletetodo()
    {
        \Session::forget('car');

        return redirect()->route('carrito');
    }
    
    
}
