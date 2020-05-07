<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SupplierCategory extends ServiceProvider
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
           $view -> with('supplierCategory', \App\SupplierCategory::all());
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
