<?php

namespace App\Providers;

use App\DataAccess\Interfaces\UserRepository;
use App\DataAccess\Repositories\UserRepository as Repository;
use Illuminate\Support\ServiceProvider;

class UserProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(UserRepository::class,Repository::class);
    }
}
