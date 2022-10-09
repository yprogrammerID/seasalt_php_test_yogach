<?php

namespace App\Providers;

use App\Interfaces\NotificationsRepositoryInterface;
use App\Repositories\NotificationsRepository;
use Illuminate\Support\ServiceProvider;

class NotificationsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(NotificationsRepositoryInterface::class, NotificationsRepository::class);
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
