<?php

use Illuminate\Database\Seeder;

class ItemModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\ItemModel::class, 5) -> create();
    }
}
