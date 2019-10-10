<?php

namespace AshrafSaeed\MessageBird;

use GuzzleHttp\Client;

use Illuminate\Support\ServiceProvider;

use AshrafSaeed\MessageBird\MessageBirdClient;

class MessageBirdServiceProvider extends ServiceProvider
{
    /**
     * creating registration of textmessage in booting of servicesprovider.
     *
     * @return null
     */
    public function boot()
    {

        $this->publishes([
            __DIR__.'/../config/textmessage.php' => config_path('textmessage.php'),
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {   

        $this->app->bind('MessageBird', function($app){

            return new MessageBirdClient(
                $app['config']['messagebird']['access_key']
            );

        });

    }

}