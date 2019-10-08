<?php

namespace AshrafSaeed\TextMessage;


class TextMessageClient {

    protected $client;
 
 	public function __construct($client)
    {

    	$this->client = $client;
    }
    /**
     *
     */
    public function sendMessage() {

    	return $this->client;

    }

}