<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Designation;
use Faker\Generator as Faker;

$factory->define(Designation::class, function (Faker $faker) {
    return [
        //
        'name' => $faker -> sentence(3),
        'descriptions' => $faker -> sentence(4)
    ];
});
