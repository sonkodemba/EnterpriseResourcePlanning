<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Evend;
use Faker\Generator as Faker;

$factory->define(Evend::class, function (Faker $faker) {
    return [
        /**
      * +-----------------+-----------------------+------+-----+---------+----------------+
        | Field           | Type                  | Null | Key | Default | Extra          |
        +-----------------+-----------------------+------+-----+---------+----------------+
        | id              | bigint unsigned       | NO   | PRI | NULL    | auto_increment |
        | user_id         | bigint unsigned       | NO   | MUL | NULL    |                |
        | meter_num       | bigint unsigned       | NO   |     | NULL    |                |
        | meter_name      | varchar(255)          | NO   |     | NULL    |                |
        | generated_token | bigint unsigned       | NO   |     | NULL    |                |
        | amount          | decimal(8,2) unsigned | NO   |     | NULL    |                |
        | deleted_at      | timestamp             | YES  |     | NULL    |                |
        | created_at      | timestamp             | YES  |     | NULL    |                |
        | updated_at      | timestamp             | YES  |     | NULL    |                |
        +-----------------+-----------------------+------+-----+---------+----------------+

         */
        'user_id' => factory(\App\User::class,3) ->create() -> id,
        'meter_num' => $faker -> randomNumber(7),
        'meter_name' => $faker -> name,
        'generated_token' => $faker -> randomNumber(20),
        'amount' => $faker -> randomNumber(2)
    ];
});
