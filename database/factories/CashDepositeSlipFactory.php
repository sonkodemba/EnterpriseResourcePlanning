<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CashDepositeSlip;
use Faker\Generator as Faker;

$factory->define(CashDepositeSlip::class, function (Faker $faker) {
    return [
        /**
      * +---------------------+-----------------+------+-----+---------+----------------+
        | Field               | Type            | Null | Key | Default | Extra          |
        +---------------------+-----------------+------+-----+---------+----------------+
        | id                  | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | bank_id             | bigint unsigned | NO   | MUL | NULL    |                |
        | slip_num            | bigint unsigned | NO   |     | NULL    |                |
        | account_num         | int unsigned    | NO   |     | NULL    |                |
        | account_holder_name | varchar(255)    | NO   |     | NULL    |                |
        | curency_type        | varchar(255)    | NO   |     | GMD     |                |
        | amount              | decimal(8,2)    | NO   |     | NULL    |                |
        | depositor_id        | bigint unsigned | NO   | MUL | NULL    |                |
        | deleted_at          | timestamp       | YES  |     | NULL    |                |
        | created_at          | timestamp       | YES  |     | NULL    |                |
        | updated_at          | timestamp       | YES  |     | NULL    |                |
        +---------------------+-----------------+------+-----+---------+----------------+

         */
        'bank_id' => factory(\App\CashDepositeSlip:: class) -> create() -> id,
        'slip_num' => $faker -> randomNumber(7),
        'account_num' => $faker -> randomNumber('9'),
        'account_holder_name' => $faker -> name,
        'curency_type' => $faker -> name,
        'amount' => $faker -> randomNumber(4),
        'depositor_id' => $faker -> randomNumber(4)

    ];
});
