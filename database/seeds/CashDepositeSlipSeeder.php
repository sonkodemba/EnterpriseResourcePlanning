<?php

use Illuminate\Database\Seeder;

class CashDepositeSlipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\CashDepositeSlip::class, 5) -> create();
    }
}
