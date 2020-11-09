<?php

namespace Hinaloe\LineNotify;

use Illuminate\Support\ServiceProvider;
use Hinaloe\LineNotify\Channel\LineChannel;
use Hinaloe\LineNotify\Message\LineMessage;
use Illuminate\Notifications\ChannelManager;

class LineNotifyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make(ChannelManager::class)->extend('line', function ($app) {
            return $app->make(LineChannel::class);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
