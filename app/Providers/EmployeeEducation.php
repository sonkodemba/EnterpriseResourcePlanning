<?php

namespace App\Providers;


 use Illuminate\Support\ServiceProvider;


class EmployeeEducation extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        view() ->composer('*', function ($view){
            $view ->with('empEducation',\App\EmployeeEducation::all());
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
