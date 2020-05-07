<?php

namespace App\Providers;

use App\Company;
use App\Status;
use Illuminate\Support\ServiceProvider;

class CompanyProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {


        view() -> composer('*', function ($view){
            $view -> with('companies', Company::all());
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
