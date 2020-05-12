<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Processor;
use Faker\Generator as Faker;

$factory->define(Processor::class, function (Faker $faker) {
    return [
        /**
         * +--------------+-----------------+------+-----+---------+----------------+
        | Field        | Type            | Null | Key | Default | Extra          |
        +--------------+-----------------+------+-----+---------+----------------+
        | id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | name         | varchar(255)    | NO   | UNI | NULL    |                |
        | size         | varchar(255)    | YES  |     | NULL    |                |
        | descriptions | longtext        | YES  |     | NULL    |                |
        | deleted_at   | timestamp       | YES  |     | NULL    |                |
        | created_at   | timestamp       | YES  |     | NULL    |                |
        | updated_at   | timestamp       | YES  |     | NULL    |                |
        +--------------+-----------------+------+-----+---------+----------------+

         */
        'name' => $faker -> name,
        'size' => ''.$faker -> randomNumber(2).'.'.$faker -> randomNumber(2),
        'descriptions' => $faker->sentence(4)
    ];
});
