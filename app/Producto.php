<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Producto extends Moloquent
{
    protected $fillable = [
        'nombre_producto', 'precio', 'stock', 'caracteristicas'
    ];
}
