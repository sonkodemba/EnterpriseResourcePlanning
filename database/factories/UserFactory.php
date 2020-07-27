<?php

/** @var Factory $factory */

use App\Employee;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
+-------------------+-----------------+------+-----+---------+----------------+
| Field             | Type            | Null | Key | Default | Extra          |
+-------------------+-----------------+------+-----+---------+----------------+
| id                | bigint unsigned | NO   | PRI | NULL    | auto_increment |
| name              | varchar(255)    | NO   |     | NULL    |                |
| email             | varchar(255)    | NO   | UNI | NULL    |                |
| email_verified_at | timestamp       | YES  |     | NULL    |                |
| password          | varchar(255)    | NO   |     | NULL    |                |
| user_category_id  | bigint unsigned | NO   | MUL | NULL    |                |
| current_login_at  | timestamp       | YES  |     | NULL    |                |
| current_login_ip  | varchar(45)     | YES  |     | NULL    |                |
| last_login_at     | timestamp       | YES  |     | NULL    |                |
| last_login_ip     | varchar(45)     | YES  |     | NULL    |                |
| last_logout_at    | timestamp       | YES  |     | NULL    |                |
| remember_token    | varchar(100)    | YES  |     | NULL    |                |
| deleted_at        | timestamp       | YES  |     | NULL    |                |
| created_at        | timestamp       | YES  |     | NULL    |                |
| updated_at        | timestamp       | YES  |     | NULL    |                |
+-------------------+-----------------+------+-----+---------+----------------+

|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => factory(Employee::class) -> create() -> id,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'user_category_id' => factory(Employee::class) -> create(),
        'remember_token' => Str::random(10),
    ];
});
