<?php

namespace AshrafSaeed\MessageBird;

use AshrafSaeed\MessageBird\Common\HttpClient;

class MessageBirdClient {
   
    public $access_key;
    public $body;
    public $originator;
    public $recipients;

    /**
     *
     */
    public function __construct($access_key) {

        $this->access_key = $access_key;
        
    }
    
    public function setBody($body) {

        $this->body = trim($body);
        return $this;
    
    }

    public function setOriginator($originator) {
        $this->originator = $originator;
        return $this;
    }

    public function setRecipients($recipients) {

        if (is_array($recipients)) {
            $recipients = implode(',', $recipients);
        }
        $this->recipients = $recipients;
        return $this;
    }

    public function setDatacoding($datacoding) {
 
        $this->datacoding = $datacoding;
        return $this;
 
    }
    
    public function toJson() {
        return json_encode($this);
    }
    
    public function sendTo( $recipients = [], $body, $originator ) {

        $this->setOriginator($originator);
        $this->setRecipients($recipients);
        $this->setBody($body);        
        $this->setDatacoding('auto');


        $objHttpClient = new HttpClient($this->access_key);

        return $objHttpClient->httpRequest('https://rest.messagebird.com/messages', $this->toJson());

    }


}