<?php

use Faker\Generator as Faker;
use App\Producto;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        //
        'PR_nombre' => $faker->word(),
        'PR_presentacion' => $faker->randomNumber(5),
        'PR_unidad' => $faker->randomNumber(3),
        'PR_precio' => $faker->randomFloat(2),
        'CA_ID' => '1',
    ];
});
