<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //fix <php artisan migrate> error for mysql
        Schema::defaultStringLength(191);
        //composer for sidebar to get all departments
        view()->composer('candidates.layouts.sidenav', function($view)
        {
            $view->with('departments', \App\Candidate::departments());
            $view->with('candidatesStatus', \App\Candidate::candidatesStatus());
            $view->with('candidateEmployers', \App\Candidate::candidateEmployers());

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
