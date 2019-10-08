<?php

namespace AshrafSaeed\TextMessage;

use Illuminate\Support\ServiceProvider;

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
            
            $client = new \MessageBird\Client($app['config']['messagebird']['access_key']);
            return new TextMessageClient($client);
            
        }, true);

        //$this->app->bind('Packages\TextMessage\Src\TextMessage::class' , function($app){ 
            
            //dd($app);
//echo 'ddddd';
            //$client = new \TextMessage\Client($app['config']['textmessage']['access_key']);
            //return new TextMessage($client);
       // });

        $this->app->alias('textmessage', 'AshrafSaeed\TextMessage\TextMessageClient');

    }

}