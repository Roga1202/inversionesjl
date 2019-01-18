<?php

use Faker\Generator as Faker;
use App\categoria;

$factory->define(categoria::class, function (Faker $faker) {
    return [
        //
        'CA_nombre' => $faker->unique()->word(),
    ];
});
