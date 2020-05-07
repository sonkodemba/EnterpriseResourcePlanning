<?php

namespace App\Providers;

use App\Department;
use Illuminate\Support\ServiceProvider;

class DepartmentProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /**
         * Fetch from Department table and populate the  View tht calls it
         */
        view() ->composer('*', function ($view){
            $view ->with('departments',Department::all());
        });


    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
