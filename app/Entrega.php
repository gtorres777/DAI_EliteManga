<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Entrega extends Moloquent
{
    protected $fillable = [
        'compra_id', 'fecha_entrega'
    ];
}
