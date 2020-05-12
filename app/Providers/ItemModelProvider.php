<?php

namespace App\Providers;

use App\ItemModel;
use Illuminate\Support\ServiceProvider;

class ItemModelProvider extends ServiceProvider
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
            $view -> with('itemModelProvider', ItemModel::all());
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
