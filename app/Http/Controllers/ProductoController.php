<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Manga;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductoController extends Controller
{
    

    public function index()
    {
        $productos = Producto::all()->sortByDesc('created_at');
	    return view('tienda', compact('productos'));
    }

    
    public function especificar($nombre)
    {
        $titulo = '/'.strval($nombre).'/i';
        $mangas = Producto::where('nombre_producto', 'regexp',$titulo )->get()->sortByDesc('created_at');

        return view ('Productos', compact('mangas','nombre'));
    }

    public function show($id)
    {
        return view('producto', ['producto' => Producto::find($id)]);
    }


    public function edit(Producto $producto)
    {
        //
    }

    public function update(Request $request, Producto $producto)
    {
        //
    }

    public function destroy(Producto $producto)
    {
        
          
    }

    public function create ()
    {
        return view ('agregarproductos');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_producto' => 'required:max:30',
            'caracteristicas' => 'required:max:300',
            'precio' => 'required:max:300',
            'stock' => 'required:max:15',
            'imgProducto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
        $img = $request->file('imgProducto');
        $imgName = date('Y-m-d').$img->getClientOriginalName();


        $producto = new Producto();
        $producto ->nombre_producto = $request->get('nombre_producto');
        $producto ->caracteristicas = $request->get('caracteristicas');
        $producto ->precio = $request->get('precio');
        $producto ->stock = $request->get('stock');
        $producto ->imgProducto = $imgName;

        $request->imgProducto->move(public_path('productos'), $imgName);
           
        $producto->save();

        return redirect()->route('tienda');
    }
}
