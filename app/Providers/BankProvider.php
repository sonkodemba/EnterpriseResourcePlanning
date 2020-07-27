<?php

namespace App\Providers;

use App\Bank;
use Illuminate\Support\ServiceProvider;

class BankProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        view() ->composer('*', function ($view){
            $view ->with('bankProvider',Bank::all());
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
