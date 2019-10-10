<?php

namespace AshrafSaeed\MessageBird\Common;

use GuzzleHttp\Client;

class HttpClient {

    private $access_key;

    public function __construct($access_key) {

        $this->access_key = $access_key;
    
    }
    
    public function httpRequest($requestUrl, $jsonData) {

        try {

            $Client = new client();

            $response = $Client->request('POST', $requestUrl, [
                'body' => $jsonData,
                'headers' => [
                    'content-type' => 'application/json',
                    'Accept' => 'application/json',
                    'Authorization' => 'AccessKey '.$this->access_key,
                ],
            ]);

            return json_encode($response);

        } catch (Exception $exception) {
            
            throw CouldNotSendNotification::serviceRespondedWithAnError($exception);
        
        }

    }
   
}