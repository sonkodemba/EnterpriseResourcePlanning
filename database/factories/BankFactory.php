<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bank;
use Faker\Generator as Faker;

$factory->define(Bank::class, function (Faker $faker) {
    return [
        /**
         * +--------------+-----------------+------+-----+---------+----------------+
        | Field        | Type            | Null | Key | Default | Extra          |
        +--------------+-----------------+------+-----+---------+----------------+
        | id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | code         | varchar(255)    | NO   | UNI | NULL    |                |
        | name         | varchar(255)    | NO   | UNI | NULL    |                |
        | account_ref  | varchar(255)    | NO   | UNI | NULL    |                |
        | account_num  | bigint unsigned | NO   | UNI | NULL    |                |
        | descriptions | longtext        | YES  |     | NULL    |                |
        | created_at   | timestamp       | YES  |     | NULL    |                |
        | updated_at   | timestamp       | YES  |     | NULL    |                |
        +--------------+-----------------+------+-----+---------+----------------+

         */
        'code' => \Illuminate\Support\Str::random(5),
        'name' => $faker -> name,
        'account_ref' => \Illuminate\Support\Str::random(6),
        'account_num' => $faker -> randomNumber(7),
        'descriptions' => $faker -> sentence(3),
    ];
});
