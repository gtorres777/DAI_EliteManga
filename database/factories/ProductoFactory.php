<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre_producto' => $faker->randomElement(array('mñeco totodile dragon ball z', 'polera naruto shippuden', 'jarron one piece')),
        'precio' => $faker->numberBetween($min = 1000, $max = 9000),
        'imgProducto' => $faker->image('public/productos', 100, 100, null, false),
        'stock' => $faker->randomDigit,
        'caracteristicas' => $faker->sentence($nbWords = 6, $variableNbWords = true)
    ];
});
