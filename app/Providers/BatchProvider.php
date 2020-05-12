<?php

namespace App\Providers;

use App\Batch;
use Illuminate\Support\ServiceProvider;

class BatchProvider extends ServiceProvider
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
            $view -> with('batchProvider', Batch::all());
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
