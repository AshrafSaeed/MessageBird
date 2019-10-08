<?php

namespace AshrafSaeed\TextMessage;

use Illuminate\Support\ServiceProvider;
use AshrafSaeed\TextMessage\Facades;


class TextMessageServiceProvider extends ServiceProvider
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

        $this->app->bind('textmessage', function($app){
            
            $client = $app['config']['messsagebird']['access_key'];
            return new TextMessageClient($client);

        });

    }

}