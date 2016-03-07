<?php

    /**
     * Created by PhpStorm.
     * User: jkirkby91
     * Date: 04/03/2016
     * Time: 19:15
     */

    namespace CryptoWallet;

    use Unirest\Request;

    class HttpClient extends Client {

        /**
         * @param Configuration $apiKey
         */
        public function __Construct($apiKey)
        {
            $this->requestClient = new Request();

            $this->requestClient->defaultHeaders([
                    'Content-Type'      => 'application/json',
                    'x-authorization'   => $apiKey
                ]);

            $this->requestClient->verifyHost(false);
            $this->requestClient->verifyPeer(false);
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
                $response = $this->requestClient->send('POST',$endpoint,$payload);
            } catch ( \Exception $e){
                throw new \Exception($e->getMessage(),500);
            }
            return $response;
        }
    }