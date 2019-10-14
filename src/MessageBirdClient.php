<?php

namespace AshrafSaeed\MessageBird;

use AshrafSaeed\MessageBird\Common\HttpClient;

use AshrafSaeed\MessageBird\Objects\Object;

class MessageBirdClient {

    use Object;

    const SMS_END_POINT = 'https://rest.messagebird.com/messages';
    const BAL_END_POINT = 'https://rest.messagebird.com/balance';
    const HLR_END_POINT = 'https://rest.messagebird.com/hlr';
 

    private $access_key;
    private $Object;

    /**
     *
     */
    public function __construct($access_key) {

        $this->access_key = $access_key;
        
    }
    
    /**
     *
     */
    public function sendMessage( $recipients = [], $body, $originator ) {

        $this->setOriginator($originator);
        $this->setRecipients($recipients);
        $this->setBody($body);        
        $this->setDatacoding('auto');

        $objHttpClient = new HttpClient($this->access_key);

        return $objHttpClient->httpRequest(self::SMS_END_POINT, $this->getJson());

    }

    /**
     *
     */
    public function getBalance() {

        $objHttpClient = new HttpClient($this->access_key);
        return $objHttpClient->httpRequest(self::BAL_END_POINT, json_encode([]));
    
    }

    /**
     *
     */
    public function sendHlr($msisdn = NULL)
    {
        $objHttpClient = new HttpClient($this->access_key);
        return $objHttpClient->httpRequest(self::HLR_END_POINT, json_encode(['msisdn' => $msisdn]));
    
    }

}