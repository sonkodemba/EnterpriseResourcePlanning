<?php

namespace App\Providers;

use App\Processor;
use Illuminate\Support\ServiceProvider;

class ProcessorProvider extends ServiceProvider
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
            $view -> with('processorProvider', Processor::all());
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
