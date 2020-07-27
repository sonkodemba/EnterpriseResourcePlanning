<?php

namespace App\Providers;

use App\UserCategory;
use Illuminate\Support\ServiceProvider;

class UserCategoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view() -> composer('*', function ($view){
            $view -> with('userCategoryProvider', UserCategory::all());
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
