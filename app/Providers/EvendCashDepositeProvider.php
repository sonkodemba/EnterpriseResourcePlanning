<?php

namespace App\Providers;

use App\Bank;
use Illuminate\Support\ServiceProvider;

class EvendCashDepositeProvider extends ServiceProvider
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
            return $view -> with('cashDeposite',Bank::all());
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
