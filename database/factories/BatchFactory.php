<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Batch;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Batch::class, function (Faker $faker) {
    return [
        /**
      * +--------------+-----------------+------+-----+---------+----------------+
        | Field        | Type            | Null | Key | Default | Extra          |
        +--------------+-----------------+------+-----+---------+----------------+
        | id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | code         | varchar(255)    | NO   | UNI | NULL    |                |
        | name         | varchar(255)    | NO   | UNI | NULL    |                |
        | descriptions | longtext        | YES  |     | NULL    |                |
        | deleted_at   | timestamp       | YES  |     | NULL    |                |
        | created_at   | timestamp       | YES  |     | NULL    |                |
        | updated_at   | timestamp       | YES  |     | NULL    |                |
        +--------------+-----------------+------+-----+---------+----------------+

         */
        'code' => Str::random(5),
        'name' => $faker -> sentence(3),
        'descriptions' => $faker -> sentence(5)
    ];
});
