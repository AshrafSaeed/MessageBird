<?php

namespace AshrafSaeed\MessageBird\Objects;

trait Object {

    protected $msgbody;
    protected $originator;
    protected $recipients;
    
    /**
     *
     */
    public function setBody($body) {

        $this->body = trim($body);
    
    }

    /**
     *
     */
    public function setOriginator($originator) {
    
        $this->originator = $originator;
        
    }

    /**
     *
     */
    public function setRecipients($recipients) {

        if (is_array($recipients)) {
            $recipients = implode(',', $recipients);
        }
        
        $this->recipients = $recipients;
        
    }

    /**
     *
     */
    public function setDatacoding($datacoding) {
 
        $this->datacoding = $datacoding;
 
    }

    /**
     *
     */
    public function getOriginator() {
    
        return $this->originator;
        
    }

    /**
     *
     */
    public function getRecipients() {

        return $this->recipients;
        
    }

    /**
     *
     */
    public function getDatacoding() {
 
        return $this->datacoding;
 
    }

    /**
     *
     */
    public function getBody() {

        return $this->body;

    }

        
    /**
     *
     */
    public function getJson() {

        return json_encode(
            [
                'recipients' => (array) $this->getRecipients(),
                'originator' => $this->getOriginator(),
                'body' => $this->getBody()
            ]
        );

    
    }

}