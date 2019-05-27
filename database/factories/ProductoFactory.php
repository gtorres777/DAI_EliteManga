<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre_producto' => $faker->name,
        'precio' => $faker->numberBetween($min = 1000, $max = 9000),
        'stock' => $faker->randomDigit,
        'caracteristicas' => $faker->sentence($nbWords = 6, $variableNbWords = true)
    ];
});
