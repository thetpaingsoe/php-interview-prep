<?php

namespace App;

use Exception;
use GuzzleHttp\Client;

class MainController {
    public function index() {
        return "Hello, World!";
    }

    /**
     * Ref : https://github.com/stripe-interview/python-interview-prep/blob/master/verify_tls.py 
     */
    public function verifyTLS() {
        $client = new Client([
            'base_uri' => 'https://www.howsmyssl.com/a/',        
        ]);

        try{
            $response = $client->request('GET', 'check');
            $body= $response->getBody();

            $parsedBody = json_decode($body);

            if ($parsedBody->tls_version < 'TLS 1.2') {                
                return "Error: The Stripe API requires TLS version 1.2, you are running " . $parsedBody->tls_version;
            }else {
                return "TLS 1.2 supported; no action required.";
            }
        }catch(Exception $e) {
            return $e->getResponse()->getReasonPhrase();
        }

        return $body;
    }
}

