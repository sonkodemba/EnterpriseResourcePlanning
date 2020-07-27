<?php

use Illuminate\Database\Seeder;

class UserCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\UserCategory::class , 3) -> create();
    }
}
