<?php

namespace Akshay\Maillogsaver;

use Illuminate\Support\ServiceProvider;

class MaillogsaverServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'maillogsaver');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->mergeConfigFrom(__DIR__ . '/config/maillogsaver.php', 'maillogsaver');
        $this->publishes([__DIR__ . '/config/maillogsaver.php' => config_path('maillogsaver.php')]);
    }

    public function register()
    {
    }
}