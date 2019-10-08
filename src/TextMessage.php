<?php

namespace AshrafSaeed\TextMessage;

class TextMessageClient {

    public $client;
    public $errorMessages = []; 
 
 	public function __construct($client)
    {

    	$this->client = $client;
    }
    /**
     *
     */
    public function getErrorMessages()
    {

    	echo $this->client;
    }
}