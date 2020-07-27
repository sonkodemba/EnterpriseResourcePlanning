<?php

use Illuminate\Database\Seeder;

class EmploymentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         *
         */
        factory(\App\EmploymentCategory::class,5) -> create();
    }
}
