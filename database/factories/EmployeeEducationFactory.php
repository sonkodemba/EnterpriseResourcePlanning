<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\EmployeeEducation;
use Faker\Generator as Faker;

$factory->define(EmployeeEducation::class, function (Faker $faker) {
    return [
        /**
         * +--------------+-----------------+------+-----+---------+----------------+
        | Field        | Type            | Null | Key | Default | Extra          |
        +--------------+-----------------+------+-----+---------+----------------+
        | id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | education    | varchar(255)    | NO   | UNI | NULL    |                |
        | descriptions | longtext        | YES  |     | NULL    |                |
        | deleted_at   | timestamp       | YES  |     | NULL    |                |
        | created_at   | timestamp       | YES  |     | NULL    |                |
        | updated_at   | timestamp       | YES  |     | NULL    |                |
        +--------------+-----------------+------+-----+---------+----------------+

         */
        'code' => \Illuminate\Support\Str::random(4),
        'education' => $faker -> name,
        'descriptions' => $faker -> sentence(4)
    ];
});
