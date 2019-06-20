<?php

namespace App\Http\Controllers;

use App\Capitulo;
use App\Manga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CapituloController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show ($idcapitulo, $idmanga)
    {
        $manga = Manga::find($idmanga);
        $capitulos = $manga->capitulos->find($idcapitulo);
        
        return view ('capitulos', compact('capitulos'));
        
        
    }

    public function cargarCapitulo ($id)
    {
        $mangas = Manga::find($id);
        return view ('agregarcapitulos', compact('mangas'));
    }

    public function store(Request $request,$id)
    {
        $request->validate([
            'numero_capitulo' => 'required',
            'archivoManga' => 'required|mimes:pdf',
        ]);
        
        $archivo = $request->file('archivoManga');
        $archivoName = date('Y-m-d').$archivo->getClientOriginalName();

        $capitulo = new Capitulo();
        $capitulo ->numero_capitulo = $request->get('numero_capitulo');
        $capitulo ->archivo = $archivoName;

        $manga = Manga::find($id);
        $manga->capitulos()->save($capitulo);

        $request->archivoManga->move(public_path('capitulos'), $archivoName);

        return redirect()->route('mangas',$id);
    }

    public function cargarManga ()
    {
        return view ('agregarmangas');
    }

    public function storeManga(Request $request)
    {
        $request->validate([
            'titulo_manga' => 'required:max:30',
            'descripcion' => 'required:max:300',
            'categoria' => 'required:max:15',
            'estado' => 'required',
            'imgManga' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
        $img = $request->file('imgManga');
        $imgName = date('Y-m-d').$img->getClientOriginalName();


        $manga = new Manga();
        $manga ->nombre_manga = $request->get('titulo_manga');
        $manga ->descripcion = $request->get('descripcion');
        $manga ->categoria = $request->get('categoria');
        $manga ->estado = $request->get('estado');
        $manga ->imgManga = $imgName;

        $request->imgManga->move(public_path('images'), $imgName);
           
        $manga->save();

        return redirect()->route('principal');
    }

    public function cambiarFoto(Request $request, $id)
    {
        $request->validate([
            'fotoperfil' => 'required|image'
        ]);
        
        $img = $request->file('fotoperfil');
        $imgName = $img->getClientOriginalName();

        $user = User::find($id);
        $user->imgPerfil = $imgName;

        $request->fotoperfil->move(public_path('usuarios'), $imgName);

        $user->save();
        
        return redirect()->route('perfil');
    }
}
