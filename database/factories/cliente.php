<?php

use Faker\Generator as Faker;
use App\Cliente;

$factory->define(Cliente::class, function (Faker $faker) {
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
        'CL_empresa_envio' => $faker->Name(),
        'CL_estado' => $faker->numberBetween(1,25),
        'CL_ciudad' => $faker->numberBetween(1,3),
    ];
});
