<?php

use App\EmployeeEducation;
use Illuminate\Database\Seeder;

class EmployeeEducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(EmployeeEducation::class, 10) -> create();
    }
}
