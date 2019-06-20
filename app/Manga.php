<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Manga extends Moloquent
{
    protected $fillable = [
        'nombre_manga', 'descripcion', 'estado', 'imgManga', 'categoria'
    ];

    public function users()
    {
       return $this->belongsTo('App\User');
    }

    public function capitulos()
    {
        return $this->embedsMany('App\Capitulo');
    }

}

