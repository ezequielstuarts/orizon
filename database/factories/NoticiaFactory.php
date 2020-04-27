<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Noticia::class, function (Faker $faker) {
    $title = $faker->sentence(5);
    $subtitle = $faker->sentence(18);
    return [
        'date' =>$faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
        'title' => $title,
        'subtitle' => $subtitle,
        'copete' => $faker->text(150),
        'contenido' => $faker->text(800),
        'slug' => str_slug($title),
        'img' => $faker->imageUrl($width = 560, $height = 560 ),
        'status' => 'PUBLISHED',
    ];
});
