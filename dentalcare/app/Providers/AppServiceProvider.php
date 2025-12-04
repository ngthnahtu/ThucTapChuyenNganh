<?php

namespace App\Providers;

use App\Models\Khoa;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        // sẽ truyền cho tất cả các view
        view()->share('khoas', Khoa::all());
        Schema::defaultStringLength(191);
    }
}
