<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ItemCategory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(ItemCategory::class, function (Faker $faker) {
    return [
        /**
      * +--------------+-----------------+------+-----+---------+----------------+
        | Field        | Type            | Null | Key | Default | Extra          |
        +--------------+-----------------+------+-----+---------+----------------+
        | id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | code         | varchar(255)    | YES  | UNI | NULL    |                |
        | name         | varchar(255)    | NO   | UNI | NULL    |                |
        | descriptions | longtext        | YES  |     | NULL    |                |
        | deleted_at   | timestamp       | YES  |     | NULL    |                |
        | created_at   | timestamp       | YES  |     | NULL    |                |
        | updated_at   | timestamp       | YES  |     | NULL    |                |
        +--------------+-----------------+------+-----+---------+----------------+
         */
        'code' => Str::random(5),
        'name'  => Str::random(5),
        'descriptions' => $faker -> sentence(3)

    ];
});
