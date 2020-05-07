<?php

namespace App\Providers;

use App\Project;
use App\Status;
use Illuminate\Support\ServiceProvider;

class ProjectProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view() -> composer('*', function ($view){
            $view -> with('project', Project::all());
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
