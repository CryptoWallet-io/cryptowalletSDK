<?php

    /**
     * Created by PhpStorm.
     * User: jkirkby91
     * Date: 04/03/2016
     * Time: 18:08
     */

    namespace CryptoWallet;

    use CryptoWallet\Client;
    use CryptoWallet\HttpClient;
    use CryptoWallet\Configuration;

    class CryptoWallet
    {

        public  $client;

        protected $apiKey;
        protected $configuration;

        /**
         * Factory to return the CryptoWallet client with the method requested
         *
         * @param $apiKey
         * @param $method
         * @throws \Exception
         */
        public function __Construct($apiKey,$method)
        {
            if (version_compare(PHP_VERSION, '5.4.0', '<')) {
                throw new \Exception('The CryptoWallet SDK requires PHP version 5.4 or higher.');
            }
            if (!function_exists('curl_init')) {
                throw new \Exception('The CryptoWallet SDK needs the CURL PHP extension.');
            }
            if (!function_exists('json_decode')) {
                throw new \Exception('The CryptoWallet SDK needs the JSON PHP extension.');
            }

            $this->client = new Client(new Configuration($apiKey));

            if(is_object($method)){
                $this->client = $method;
            } else {
                throw new \Exception('You need to initialise a method to use the CryptoWallet client');
            }
        }
    }