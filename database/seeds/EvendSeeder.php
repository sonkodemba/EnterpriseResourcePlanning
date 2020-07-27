<?php

use Illuminate\Database\Seeder;

class EvendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Evend::class, 10) -> create();
    }
}
