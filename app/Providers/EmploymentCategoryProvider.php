<?php

namespace App\Providers;

use App\Department;
use App\EmploymentCategory;
use Illuminate\Support\ServiceProvider;

class EmploymentCategoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view() ->composer('*', function ($view){
            $view ->with('employmentCategoryProvider',EmploymentCategory::all());
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
