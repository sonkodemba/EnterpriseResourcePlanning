<?php

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
         $this->call([

             /**
              * Employee Seeder
              */
            DepartmentSeeder::class,
            DesignationSeeder::class,
            EmployeeEducationSeeder::class,
            EmployeeSeeder::class,
            UserSeeder::class,


             /**
              * Supplier Seeder
              */
             SupplierCategorySeeder::class,
             SupplierSeeder::class,


             /**
              * Item Seeder
              */
             ItemCategorySeeder::class,
             ItemModelSeeder::class,
             BatchSeeder::class,
             ProcessorSeeder::class,
//             ItemSeeder::class,
             /**
              * Project Management Model
              */
             ProjectSeeder::class,
             CompanySeeder::class,
             TaskSeeder::class,
             CommentSeeder::class


         ]);
    }
}
