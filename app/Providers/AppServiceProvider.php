<?php

namespace App\Providers;

use App\Models\Agent;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        Agent::preventLazyLoading(! app()->isProduction());
        Agent::preventSilentlyDiscardingAttributes(! app()->isProduction());
    }
}
