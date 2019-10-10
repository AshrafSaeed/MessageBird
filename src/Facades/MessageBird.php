<?php

namespace AshrafSaeed\MessageBird\Facades;

use Illuminate\Support\Facades\Facade;

class MessageBird extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'MessageBird'; 
    }
}