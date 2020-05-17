<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Mensaje::class, function (Faker $faker) {
    $localidad = $faker->sentence(2);
    return [
        'nombre' => $faker->name($gender = 'male'|'female'),
        'telefono' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'pais' => $localidad,
        'provincia' => $localidad,
        'localidad' => $localidad,
        'empresa' => $localidad,
        'mensaje' => $faker->text(600),
        'status' => $faker->randomElement(['RESP', 'NORESP'])
    ];
});


