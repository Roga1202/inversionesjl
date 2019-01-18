<?php

use Faker\Generator as Faker;
use App\cliente;

$factory->define(cliente::class, function (Faker $faker) {
    return [
        //
        'CL_primer_nombre' => $faker->firstName(),
        'CL_otros_nombres' => $faker->firstName(),
        'CL_primer_apellido' => $faker->lastName(),
        'CL_otros_apellidos' => $faker->lastName(),
        'CL_numero_compras' => '0',
        'CL_CI' => $faker->randomNumber(5),
        'CL_telefono' => $faker->randomNumber(5),
        'CL_direccion' => $faker->address(),
        'CL_correo' => $faker->freeEmail(),
        'CL_empresa_envio' => $faker->name(),
    ];
});
