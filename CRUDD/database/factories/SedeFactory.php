<?php


// database/factories/SedeFactory.php

use App\Models\Sede;
use Faker\Generator as Faker;


$factory->define(Sede::class, function (Faker $faker) {
    return [
        'nombre_sede' => $faker->name,
        'encargadosede' => $faker->name,
        'ubicacion' => $faker->address,
    ];
});


