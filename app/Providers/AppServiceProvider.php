<?php

namespace App\Providers;

use App\DataAccess\Interfaces\UserRepository;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $bindings = [
        UserRepository::class => \App\DataAccess\Repositories\UserRepository::class
    ];
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
        //
    }
}
