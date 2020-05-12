<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use App\Project;
use App\Status;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Project::class, function (Faker $faker) {
    return [
        /**
        * +--------------+-----------------------+------+-----+---------+----------------+
        | Field        | Type                  | Null | Key | Default | Extra          |
        +--------------+-----------------------+------+-----+---------+----------------+
        | id           | bigint unsigned       | NO   | PRI | NULL    | auto_increment |
        | name         | varchar(255)          | NO   | UNI | NULL    |                |
        | code         | varchar(255)          | NO   | UNI | NULL    |                |
        | descriptions | longtext              | YES  |     | NULL    |                |
        | budget       | decimal(8,2) unsigned | YES  |     | NULL    |                |
        | duration     | int unsigned          | NO   |     | NULL    |                |
        | status_id    | bigint unsigned       | NO   | MUL | NULL    |                |
        | company_id   | bigint unsigned       | NO   | MUL | NULL    |                |
        | deleted_at   | timestamp             | YES  |     | NULL    |                |
        | created_at   | timestamp             | YES  |     | NULL    |                |
        | updated_at   | timestamp             | YES  |     | NULL    |                |
        +--------------+-----------------------+------+-----+---------+----------------+
         */
        'name' => $faker -> name,
        'code' => strtoupper(Str::random(5)),
        'descriptions' => $faker -> sentence(5),
        'budget' => $faker->randomNumber(6),
        'duration'  => $faker-> randomNumber(4),
        'status_id' => factory(Status::class) -> create() -> id,
        'company_id' => factory(Company::class) -> create() -> id
    ];
});
