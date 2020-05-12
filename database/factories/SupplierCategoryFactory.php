<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SupplierCategory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(SupplierCategory::class, function (Faker $faker) {
    return [
        /**
         * +--------------+-----------------+------+-----+---------+----------------+
        | Field        | Type            | Null | Key | Default | Extra          |
        +--------------+-----------------+------+-----+---------+----------------+
        | id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | name         | varchar(255)    | NO   | UNI | NULL    |                |
        | descriptions | longtext        | YES  |     | NULL    |                |
        | deleted_at   | timestamp       | YES  |     | NULL    |                |
        | created_at   | timestamp       | YES  |     | NULL    |                |
        | updated_at   | timestamp       | YES  |     | NULL    |                |
        +--------------+-----------------+------+-----+---------+----------------+

         */

        'code' => strtoupper(Str::random(4)),
        'name' => $faker -> name,
        'descriptions' => $faker -> sentence(4)
    ];
});
