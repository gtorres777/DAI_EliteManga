<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Capitulo extends Moloquent
{
    protected $fillable = [
        'numero_capitulo', 'archivo'
    ];

    public function users()
    {
       return $this->belongsTo('App\Manga');
    }
}
