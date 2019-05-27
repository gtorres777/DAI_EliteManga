<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Usuario;
use Faker\Generator as Faker;

$factory->define(Usuario::class, function (Faker $faker) {
    return [
        'nombres_usuario' => $faker->firstName,
        'apellidos_usuario' => $faker->lastName,
        'correo_usuario' => $faker->email,
        'fecha_nacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'lista_compras' => $faker->words($nb = 3, $asText = false)
        //
    ];
});
