<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Entrega extends Moloquent
{
    protected $fillable = [
        'fecha_entrega'
    ];

    public function compras()
    {
        return $this->embedsOne('App\Compra');
    }
}
