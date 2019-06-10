<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\User;
use App\Manga;
use App\Producto;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    $mangas = Manga::all();
    $manga_ids = array();
    foreach($mangas as $manga)
    {
        $manga_ids[] = $manga->id;
    }

    $productos = Producto::all();
    $producto_ids = array();
    foreach($productos as $producto)
    {
        $producto_ids[] = $producto->id;
    }
    
    return [
        'name' => $faker->firstName,
        'apellidos' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'fecha_nacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'manga_id' => $faker->randomElement($manga_ids),
        'producto_id' => $faker->randomElement($producto_ids),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'remember_token' => Str::random(10),
        //
    ];
});
