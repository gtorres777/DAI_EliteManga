<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Manga;
use Faker\Generator as Faker;

$factory->define(Manga::class, function (Faker $faker) {
    return [
        'nombre_manga' => $faker->word,
        'capitulos_mangas' => $faker->randomDigit,
        'estado_mangas' => $faker->randomLetter,
        'imgManga' => $faker->name,
        'categoria' => $faker->randomElement(array('accion','drama','romance','comedia','gore','shonen','shoujo','arem','magia','aventura'))
    ];
});
