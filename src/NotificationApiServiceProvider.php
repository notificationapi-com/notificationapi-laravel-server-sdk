<?php

namespace NotificationAPI;

use Illuminate\Support\Facades\Notification;
use Illuminate\Support\ServiceProvider;
use Illuminate\Notifications\ChannelManager;

class NotificationApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/services.php' => base_path('config/services.php'),
        ], 'config');

        $this->mergeConfigFrom(__DIR__ . '/../config/services.php', 'services');
    }

    public function register(): void
    {
        require_once(__DIR__.'/helpers.php');

        Notification::resolved(function (ChannelManager $service) {
            $service->extend('notification-api', function () {
                return new NotificationApiChannel();
            });
        });
    }
}
