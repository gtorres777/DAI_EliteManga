<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class MangaFavorito extends Moloquent
{
    protected $fillable = [
        'lista_mangas'
    ];
}
