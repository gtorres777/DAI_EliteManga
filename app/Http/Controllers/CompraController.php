<?php

namespace App\Http\Controllers;

use App\Compra;
use App\Entrega;
use App\User;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;



class CompraController extends Controller
{
    public function __construct()
    {
        
        $this->middleware('auth');
        if (!\Session::has('compra')) \Session::put('compra',array());
        
    }
    public function compras()
    {
        $user = User::find(Auth::id());
        $llave = 0;

        return view('compras', compact('user', 'llave'));
    }

    
    public function cambiarFormulario(Request $request)
    {
        $request->validate([
            'name' => 'required|max:30',
            
            'email' => 'required|email|max:255',
            'direccion' => 'required|max:255',
        ]);
        
        $compra = \Session::get('compra');
        $compra['name']=$request->get('name');

        $compra['email']=$request->get('email');
        $compra['direccion']=$request->get('direccion');

        $llave = 1;
        
        \Session::put('compra',$compra);

        
        return view('compras', compact('user', 'llave'));
    }

    public function cambiarFormularioFinal(Request $request)
    {
        $request->validate([
            'numerotarjeta' => 'required|max:15',
            'fechaexpiracion' => 'required|max:5',
            'codigoseguridad' => 'required|max:3',
            'dni' => 'required|max:8',
        ]);
        
        $compra = \Session::get('compra');
        $compra['numerotarjeta']=$request->get('numerotarjeta');
    
        $car=\Session::get('car');
        $total=$this->total();

        $llave = 2;
        \Session::put('compra',$compra);

        
        return view('compras', compact('user', 'llave','car','total'));
    }

    

    public function guardarCompra()
    {
        $c = \Session::get('compra');

        $compra = new Compra();


        $compra->user_id=Auth::id();
        
        $compra->destino=$c['direccion'];

        $fe = Carbon::now()->addWeek();

        $compra->fecha_compra = Carbon::now();

        $compra->fecha_entrega = $fe;
        $compra->total=$this->total();  

        $compra->save();

        $this->prod($compra->id);

        \Session::forget('car');
        \Session::forget('compra');
        
        return redirect()->route('tienda');


    }

    public function prod($id)
    {
        $compra = Compra::find($id);
        $car = \Session::get('car');

        foreach ($car as $key => $value) 
        {
            $producto = new Entrega();

            $producto->nombre=$value['nombre_producto'];
            $producto->cantidad=$value['stock'];
            $producto->unidad=$value['precio'];
            $producto->subtotal=(($value['precio'])*($value['stock']));

            $compra->entregas()->save($producto);
         }

        
        
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
}
