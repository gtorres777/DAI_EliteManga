<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Usuario extends Moloquent
{
    protected $fillable = [
        'nombres_usuario', 'apellidos_usuario', 'correo_usuario', 'fecha_nacimiento', 'lista_compras'
    ];
}
