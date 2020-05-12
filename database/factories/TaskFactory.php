<?php

/** @var Factory $factory */

use App\Project;
use App\Status;
use App\Task;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Task::class, function (Faker $faker) {
    return [
        /**
         * +--------------+-----------------+------+-----+---------+----------------+
        | Field        | Type            | Null | Key | Default | Extra          |
        +--------------+-----------------+------+-----+---------+----------------+
        | id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | name         | varchar(255)    | NO   |     | NULL    |                |
        | descriptions | longtext        | YES  |     | NULL    |                |
        | duration     | int unsigned    | NO   |     | NULL    |                |
        | status_id    | bigint unsigned | NO   | MUL | NULL    |                |
        | project_id   | bigint unsigned | NO   | MUL | NULL    |                |
        | deleted_at   | timestamp       | YES  |     | NULL    |                |
        | created_at   | timestamp       | YES  |     | NULL    |                |
        | updated_at   | timestamp       | YES  |     | NULL    |                |
        +--------------+-----------------+------+-----+---------+----------------+
         */
        'name' => $faker -> name,
        'descriptions' => $faker -> sentence(4),
        'duration' => $faker-> randomNumber(4),
        'status_id' => factory(Status::class) -> create() -> id,
        'project_id' => factory(Project::class) -> create() -> id,

    ];
});
