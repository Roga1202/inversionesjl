<?php

use Faker\Generator as Faker;
use App\Factura;

$factory->define(Factura::class, function (Faker $faker) {
    return [
        //
        'CL_ID' => '1',
        'FA_precio_neto' => $faker->randomFloat(2),
        'FA_iva' => $faker->randomFloat(2),
        'FA_precio_total' => $faker->randomFloat(2),
    ];
});
