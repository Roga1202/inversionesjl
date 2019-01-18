<?php

use Faker\Generator as Faker;
use App\detalles_factura;

$factory->define(detalles_factura::class, function (Faker $faker) {
    return [
        //
        'FA_ID' => '1',
        'PR_ID' => '1',
        'DF_cantidad' => $faker->randomDigitNotNull(),
        'DF_precio' => $faker->randomFloat(2),
    ];
});
