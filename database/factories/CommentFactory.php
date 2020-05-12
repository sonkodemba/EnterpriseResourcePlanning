<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        /**
      * +------------------+-----------------+------+-----+---------+----------------+
        | Field            | Type            | Null | Key | Default | Extra          |
        +------------------+-----------------+------+-----+---------+----------------+
        | id               | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | body             | varchar(255)    | NO   |     | NULL    |                |
        | url              | longtext        | NO   |     | NULL    |                |
        | commentable_id   | bigint unsigned | NO   |     | NULL    |                |
        | commentable_type | varchar(255)    | NO   |     | NULL    |                |
        | deleted_at       | timestamp       | YES  |     | NULL    |                |
        | created_at       | timestamp       | YES  |     | NULL    |                |
        | updated_at       | timestamp       | YES  |     | NULL    |                |
        +------------------+-----------------+------+-----+---------+----------------+

         */
        'body' => $faker -> sentence(5),
        'url' => $faker -> sentence(5),
        'commentable_id' => $faker->randomNumber(2),
        'commentable_type' => Str::random(4),
    ];
});
