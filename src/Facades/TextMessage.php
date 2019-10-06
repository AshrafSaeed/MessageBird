<?php

namespace AshrafSaeed\TextMessage\Facades;

use Illuminate\Support\Facades\Facade;

class TextMessage extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'TextMessage';
    }
}