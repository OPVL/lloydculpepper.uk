<?php

namespace App\Providers;

use App\Util\Navbar\LinkNavbar;
use App\Util\Observers\LinkNavbarObserver;
use Illuminate\Support\ServiceProvider;

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
        LinkNavbar::observe(LinkNavbarObserver::class);
    }
}
