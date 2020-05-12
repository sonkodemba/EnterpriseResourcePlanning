<?php

namespace App\Providers;

use App\Supplier;
use Illuminate\Support\ServiceProvider;

class SupplierProvider extends ServiceProvider
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
            $view -> with('supplierProvider', Supplier::all());
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
