<?php

namespace AshrafSaeed\TextMessage;

use Illuminate\Support\ServiceProvider;

class TextMessageServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->publishes([
        //     __DIR__.'/../config/textmessage.php' => config_path('textmessage.php'),
        // ]);
    }
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {   

        // $this->app->bind('textmessage', function($app){
        //     $client = new \TextMessage\Client($app['config']['textmessage']['access_key']);
        //     return new TextMessage($client);
        // });
    }
}