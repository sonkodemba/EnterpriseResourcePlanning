<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CompanyUser;
use Faker\Generator as Faker;

$factory->define(CompanyUser::class, function (Faker $faker) {
    return [
        /**
         * +------------+-----------------+------+-----+---------+----------------+
        | Field      | Type            | Null | Key | Default | Extra          |
        +------------+-----------------+------+-----+---------+----------------+
        | id         | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | company_id | bigint unsigned | NO   | MUL | NULL    |                |
        | deleted_at | timestamp       | YES  |     | NULL    |                |
        | created_at | timestamp       | YES  |     | NULL    |                |
        | updated_at | timestamp       | YES  |     | NULL    |                |
        +------------+-----------------+------+-----+---------+----------------+
         */
        'company_id' => factory(CompanyUser::class) -> create() -> id
    ];
});
