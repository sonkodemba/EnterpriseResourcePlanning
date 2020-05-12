<?php

use App\CompanyUser;
use Illuminate\Database\Seeder;

class CompanyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(CompanyUser::class, 10) ->create();
    }
}
