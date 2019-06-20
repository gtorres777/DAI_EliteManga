<?php

namespace App\Http\Controllers;

use App\User;
use App\Producto;
use App\Compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function pedidos()
    {
        
        $pedidos = Compra::where('user_id','=',Auth::id())->get();
        $user = User::find(Auth::id());
        $llave = 2;
        
        return view('perfil',compact('pedidos','llave','user'));
        
        
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'fechanacimiento' => 'required|max:255',
            'domicilio' => 'required|max:255',
        ]);

        $user = User::find(Auth::id());
        $user->update($request->all());
        $user->domicilio=$request->get('domicilio');
        $user->save();
        return redirect()->route('perfil');
    }



    public function eliminarPerfil($id)
    {
        
        $user = User::find($id);
        $user->delete();



        return redirect()->route('index');
        //
    }

    public function verPerfil($id = null) {
        $user = null;

        if($id != null) {
            $user = User::find($id);
        } else {
            $user = User::find(Auth::user()->id);
        }
        $llave = "1";

        return view('perfil', [
            'user' => $user,
            'llave' => $llave
        ]);
    }

    public function comprar($id)
    {
        $producto = Producto::find($id);
        return view ('Compras', compact('producto'));
    }

    public function cambiarFoto(Request $request, $id)
    {
        $request->validate([
            'fotoperfil' => 'required|image'
        ]);
        
        $img = $request->file('fotoperfil');
        $imgName = date('Y-m-d').$img->getClientOriginalName();

        $user = User::find($id);
        $user->imgPerfil = $imgName;

        $request->fotoperfil->move(public_path('usuarios'), $imgName);

        $user->save();
        
        return redirect()->route('perfil');
    }

    
}
