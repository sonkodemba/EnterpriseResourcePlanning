<?php

namespace App\Providers;

use App\Designation;
use App\Status;
use Illuminate\Support\ServiceProvider;

class ProjectStatusProvider extends ServiceProvider
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
            $view -> with('projectStatus', Status::all());
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
