<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Supplier;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Supplier::class, function (Faker $faker) {
    return [
        /**
         * +------------------+-----------------+------+-----+---------+----------------+
        | Field            | Type            | Null | Key | Default | Extra          |
        +------------------+-----------------+------+-----+---------+----------------+
        | id               | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | name             | varchar(255)    | NO   | UNI | NULL    |                |
        | code             | varchar(255)    | NO   | UNI | NULL    |                |
        | category_id      | bigint unsigned | NO   | MUL | NULL    |                |
        | gppa_license_no  | varchar(255)    | NO   | UNI | NULL    |                |
        | trade_license_no | varchar(255)    | NO   | UNI | NULL    |                |
        | tin              | int unsigned    | NO   | UNI | NULL    |                |
        | gppa_license     | mediumtext      | YES  |     | NULL    |                |
        | trade_license    | mediumtext      | YES  |     | NULL    |                |
        | tin_certificate  | mediumtext      | YES  |     | NULL    |                |
        | address          | longtext        | YES  |     | NULL    |                |
        | telephone        | int unsigned    | NO   |     | NULL    |                |
        | email            | varchar(255)    | NO   | UNI | NULL    |                |
        | descriptions     | longtext        | YES  |     | NULL    |                |
        | deleted_at       | timestamp       | YES  |     | NULL    |                |
        | created_at       | timestamp       | YES  |     | NULL    |                |
        | updated_at       | timestamp       | YES  |     | NULL    |                |
        +------------------+-----------------+------+-----+---------+----------------+
         */
        'name' => $faker -> name,
        'code' => strtoupper(Str::random(5)),
        'category_id' =>  factory(\App\SupplierCategory::class) -> create() -> id,
        'gppa_license_no' => "GPPA".'_'.strtoupper(Str::random(5)),
        'trade_license_no' => 'TRADE'.'_'.strtoupper(Str::random(5)),
        'tin' => $faker -> randomNumber(5),
        'address' => $faker -> sentence(3),
        'telephone' => $faker -> randomNumber(7),
        'email' => $faker -> email,
        'descriptions' => $faker -> sentence(3)
    ];
});
