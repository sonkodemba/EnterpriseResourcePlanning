<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TaskUser;
use Faker\Generator as Faker;

$factory->define(TaskUser::class, function (Faker $faker) {
    return [
        /**
      * +------------+-----------------+------+-----+---------+----------------+
        | Field      | Type            | Null | Key | Default | Extra          |
        +------------+-----------------+------+-----+---------+----------------+
        | id         | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | task_id    | bigint unsigned | NO   | MUL | NULL    |                |
        | deleted_at | timestamp       | YES  |     | NULL    |                |
        | created_at | timestamp       | YES  |     | NULL    |                |
        | updated_at | timestamp       | YES  |     | NULL    |                |
        +------------+-----------------+------+-----+---------+----------------+
         */
        'task_id' => factory(TaskUser::class) -> create() -> id
    ];
});
