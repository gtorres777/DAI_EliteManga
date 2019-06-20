<?php

namespace App\Http\Controllers;

use App\Manga;
use App\Producto;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MangaController extends Controller
{
    
    public function index()
    {
        $mangas = Manga::all()->sortByDesc('created_at');
        return view('principal', compact('mangas'));
        
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id=null , $nombre=null)
    {
        
        if ($nombre == null) {
            return view('manga', ['manga' => Manga::find($id)]);
        }
        else {
            $manga = Manga::where('nombre_manga', '=', $nombre)->first();
            return view('manga', ['manga' => $manga]);
        }

        
        
    }


    public function genero($genero)
    {
        $x = '/'.strval($genero).'/i';
        $mangas = Manga::where('categoria', 'regexp', $x)->get();
        return view('principal', compact('mangas'));
        
    }

    
    public function edit(Manga $manga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manga  $manga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manga $manga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manga  $manga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manga $manga)
    {
        //
    }

    public function buscar(Request $request)
    {
        $nombre = $request->get('buscar');

        $mangas = Manga::where('nombre_manga', 'regexp', "/$nombre/i")->get();

        return view('principal', compact('mangas','nombre'));
      
        
    }

    public function agregar($id, $nombremanga)
    {
        $user = User::find(Auth::id());
        if ($user->manga_id == null) {
            $aux = array();
            $aux[$id]=$nombremanga;
            $user->manga_id=$aux;
            $user->save();
            return redirect()->route('principal');
        }
        else {
            $aux = $user->manga_id;
            $aux[$id]=$nombremanga;
            $user->manga_id=$aux;
            $user->save();
            return redirect()->route('principal');
        }  
    }

    public function eliminarFavoritos($id)
    {
        $user = User::find(Auth::id());
        $aux = $user->manga_id;
        unset($aux[$id]);
        $user->manga_id=$aux;
        $user->save();

        return redirect()->route('perfil');

    }
}
