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

        /**
         * @param $apiKey
         * @param $apiVersion
         * @param $apiUrl
         */
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
         * @param $endpoint
         *
         * @return \Unirest\response
         * @throws \Exception
         */
        public function post($payload,$endpoint)
        {
            try {
                $response = $this->requestClient->post($endpoint,null,$payload);
            } catch ( \Exception $e){
                throw new \Exception($e->getMessage(),500);
            }
            return $response;
        }
    }