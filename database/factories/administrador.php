<?php

use Faker\Generator as Faker;
use App\administrador;

$factory->define(administrador::class, function (Faker $faker) {
    return [
        'AD_primer_nombre' => $faker->firstName(),
        'AD_otros_nombres' => $faker->firstName(),
        'AD_primer_apellido' => $faker->lastName(),
        'AD_otros_apellidos' => $faker->lastName(),
        'AD_CI' => $faker->randomNumber(5),
        'AD_telefono' => $faker->randomNumber(5),
        'AD_correo' => $faker->freeEmail(),
    ];
});
