<?php

namespace AshrafSaeed\TextMessage;

use AshrafSaeed\TextMessage\Resources\MessageBirdClient;


class TextMessageClient {
   
    private $active_sys;
    private $systems;
    
    /**
     *
     */
    public function __construct($active_sys, array $systems) {

        $this->active_sys = $active_sys;        
        $this->systems = $systems;

    }

    /**
     *
     */
    public function sendTo($Recipients, $msgBody, $Originator ) {

        if($this->active_sys == 'messsagebird'){
            $objMessageBird = new MessageBirdClient($this->systems[$this->active_sys]['access_key']);
            return $objMessageBird->createMessage($Recipients, $msgBody, $Originator);

        } elseif ($this->active_sys == 'clickatel'){
            return new ClickaTelClient($Recipients, $msgBody, $Originator );
        } elseif ($this->active_sys == 'neximo'){
            return new NeximoClient($Recipients, $msgBody, $Originator );
        } elseif ($this->active_sys == 'plivo'){
            return new PlivoClient($Recipients, $msgBody, $Originator );
        } elseif ($this->active_sys == 'mitto'){    
            return new MittoClient($Recipients, $msgBody, $Originator );
        }             

        return json_encode(['response' => 'Please read the documention']);
        
    }


}