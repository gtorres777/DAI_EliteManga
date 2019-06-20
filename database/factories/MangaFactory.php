<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Manga;
use Faker\Generator as Faker;

$factory->define(Manga::class, function (Faker $faker) {
    return [
        'nombre_manga' => $faker->randomElement(array('dragon ball z', 'naruto shippuden', 'one piece')),
        'descripcion' => substr($faker->sentence(2), 0, -1),
        'estado_mangas' => $faker->randomElement(array('En Emision','Finalizado')),
        'imgManga' => $faker->image('public/images', 100, 100, null, false),
        'categoria' => $faker->randomElement(array('accion','drama','romance','comedia','gore','shonen','shoujo','harem','magia','aventura'))
    ];
});
