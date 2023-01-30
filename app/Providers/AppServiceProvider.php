<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
dev_basis02
use Illuminate\Pagination\Paginator;


use illuminate\Pagination\Paginator;
 master
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}
