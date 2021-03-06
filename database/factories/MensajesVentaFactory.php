<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\MensajeVentas::class, function (Faker $faker) {
    $localidad = $faker->sentence(2);
    return [
        'created_at' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
        'nombre' => $faker->name($gender = 'male'|'female'),
        'telefono' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'pais' => $localidad,
        'provincia' => $localidad,
        'localidad' => $localidad,
        'razon' => $faker->randomElement(['Quiero ser distribuidor', 'Consulta', 'Exportación', 'Trabajar en Orizon']),
        'mensaje' => $faker->text(600),
        'status' => $faker->randomElement(['1', '0'])
    ];
});
