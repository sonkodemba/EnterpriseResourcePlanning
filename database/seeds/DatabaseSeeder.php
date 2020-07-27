<?php

use App\ItemEmployee;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(
             [
                 /**
                  * Seeder for the Evend
                  */
                 /*
                  * Bank and Cash Deposite
                  */
                 BankSeeder::class,
                 CashDepositeSlipSeeder::class,
                 EvendSeeder::class,

//                EvendSeeder::class,
                 /**
                  * Employee Seeder
                  */

                EmployeeEducationSeeder::class,
                EmploymentCategorySeeder::class,
                EmployeeSeeder::class,
                UserCategorySeeder::class,
                UserSeeder::class,


            ]
         );
    }
}
