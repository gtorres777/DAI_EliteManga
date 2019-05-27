<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Compra extends Moloquent
{
    protected $fillable = [
        'usuario_id', 'fecha_compra'
    ];
}