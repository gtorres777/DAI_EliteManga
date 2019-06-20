<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Compra extends Moloquent
{
    protected $fillable = [
        'fecha_compra'
    ];

    public function entregas()
    {
        return $this->embedsMany('App\Entrega');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function productos()
    {
        return $this->embedsMany('App\Producto');
    }
}