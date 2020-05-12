<?php

namespace App\Providers;

use App\ItemCategory;
use Illuminate\Support\ServiceProvider;

class ItemCategoryProvider extends ServiceProvider
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
            $view -> with('itemCategoryProvider', ItemCategory::all());
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
