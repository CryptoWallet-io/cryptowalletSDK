<?php

    /**
     * Created by PhpStorm.
     * User: jkirkby91
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
            $this->requestClient = new Request();

            $this->requestClient->defaultHeaders([
                    'Content-Type'      => 'application/json',
                    'x-authorisation'   => $this->apiKey
                ]);
        }

        /**
         * @param $url
         *
         * @return \Unirest\Response
         * @throws \Exception
         */
        public function get($url)
        {
            try {
                $response = $this->requestClient->get($url);
            } catch (\Exception $e){
                throw new \Exception($e->getMessage(),500);
            }
            return $response;
        }

        /**
         * @param $payload
         *
         * @return \Unirest\Response
         * @throws \Exception
         */
        public function post($payload)
        {
            try {
                $respone = $this->requestClient->post(
                    $payload['request']['url'],
                    $payload['request']['headers'],
                    $payload['data']['body']
                );
            } catch ( \Exception $e){
                throw new \Exception($e->getMessage(),500);
            }
            return $respone;
        }
    }