<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        /**
         * +-----------------------+-----------------+------+-----+---------+----------------+
        | Field                 | Type            | Null | Key | Default | Extra          |
        +-----------------------+-----------------+------+-----+---------+----------------+
        | id                    | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | name                  | varchar(255)    | NO   | UNI | NULL    |                |
        | staff_id              | bigint unsigned | NO   | UNI | NULL    |                |
        | email                 | varchar(255)    | NO   | UNI | NULL    |                |
        | employee_education_id | bigint unsigned | NO   | MUL | NULL    |                |
        | education             | varchar(255)    | NO   |     | NULL    |                |
        | address               | varchar(255)    | NO   |     | NULL    |                |
        | telephone_num         | int unsigned    | NO   |     | NULL    |                |
        | image                 | mediumtext      | NO   |     | NULL    |                |
        | department_id         | bigint unsigned | NO   | MUL | NULL    |                |
        | designation_id        | bigint unsigned | NO   | MUL | NULL    |                |
        | deleted_at            | timestamp       | YES  |     | NULL    |                |
        | created_at            | timestamp       | YES  |     | NULL    |                |
        | updated_at            | timestamp       | YES  |     | NULL    |                |
        +-----------------------+-----------------+------+-----+---------+----------------+

         */
        'name' => $faker -> name,
        'staff_id' => $faker -> randomNumber(5),
        'email' => $faker -> email,
        'employee_education_id' => factory(\App\EmployeeEducation::class) ->create() -> id,
        'education' => $faker->sentence(3),
        'address' => $faker -> address,
        'telephone_num' => $faker-> randomNumber(7),
        'image' => $faker -> imageUrl(40,50),
        'department_id' => factory(\App\Department::class) -> create() -> id,
        'designation_id' => factory(\App\Designation::class) -> create() -> id
    ];
});
