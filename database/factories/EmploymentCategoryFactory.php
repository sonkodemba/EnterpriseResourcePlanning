<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\EmploymentCategory;
use Faker\Generator as Faker;

$factory->define(EmploymentCategory::class, function (Faker $faker) {
    return [
        /**
        +--------------+-----------------+------+-----+---------+----------------+
        | Field        | Type            | Null | Key | Default | Extra          |
        +--------------+-----------------+------+-----+---------+----------------+
        | id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | name         | varchar(255)    | NO   | UNI | NULL    |                |
        | descriptions | longtext        | YES  |     | NULL    |                |
        | created_at   | timestamp       | YES  |     | NULL    |                |
        | updated_at   | timestamp       | YES  |     | NULL    |                |
        +--------------+-----------------+------+-----+---------+----------------+

         */
        'code' => \Illuminate\Support\Str::random(4),
        'name' => $faker -> firstName,
        'duration' => $faker -> randomNumber(2),
        'descriptions' => $faker -> sentence(4)
    ];
});
