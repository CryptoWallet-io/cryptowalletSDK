<?php

    /**
     * Created by PhpStorm.
     * User: Satoshi
     * Date: 04/03/2016
     * Time: 19:15
     */

    namespace CryptoWallet;

    use Unirest\Request;

    class HttpClient {

        public function __Construct($apiKey,$apiVersion,$apiUrl)
        {
            $this->apiKey = $apiKey;
            $this->apiUrl = rtrim($apiUrl, '/');
            $this->apiVersion = $apiVersion;
            $this->transport = new Request();

            $this->transport->defaultHeaders([
                    'Content-Type' => 'application/json',
                    'x-authorisation' => $this->apiKey
                ]);
        }
    }