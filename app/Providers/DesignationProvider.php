<?php

namespace App\Providers;

use App\Designation;
use Illuminate\Support\ServiceProvider;

class DesignationProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        view() -> composer('*', function ($view){
            $view -> with('designations', Designation::all());
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
