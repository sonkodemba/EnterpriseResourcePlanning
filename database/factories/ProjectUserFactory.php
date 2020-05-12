<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use App\ProjectUser;
use Faker\Generator as Faker;

$factory->define(ProjectUser::class, function (Faker $faker) {
    return [
        /**
         * +-------------+-----------------+------+-----+---------+----------------+
        | Field       | Type            | Null | Key | Default | Extra          |
        +-------------+-----------------+------+-----+---------+----------------+
        | id          | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | project_id  | bigint unsigned | NO   | MUL | NULL    |                |
        | employee_id | bigint unsigned | NO   | MUL | NULL    |                |
        | created_at  | timestamp       | YES  |     | NULL    |                |
        | updated_at  | timestamp       | YES  |     | NULL    |                |
        +-------------+-----------------+------+-----+---------+----------------+
         */
        'project_id' => factory(ProjectUser::class) -> create() -> id,
        'employee_id' => factory(Employee::class) -> create() -> id,

    ];
});
