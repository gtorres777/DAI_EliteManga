<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Producto extends Moloquent
{
    protected $fillable = [
        'nombre_producto', 'precio', 'stock', 'caracteristicas'
    ];

    public function users()
    {
       return $this->belongsTo('App\User');
    }

    public function compras()
    {
       return $this->belongsTo('App\Compra');
    }
}
