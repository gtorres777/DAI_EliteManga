<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Manga extends Moloquent
{
    protected $fillable = [
        'nombre_manga', 'capitulos_mangas', 'estado_mangas', 'imgManga', 'categoria'
    ];

    public function users()
    {
       return $this->belongsTo('App\User');
    }

}

