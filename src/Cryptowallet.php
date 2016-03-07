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

        public $client;

        public $configuration;

        /**
         * Factory to return the CryptoWallet client with the method requested
         *
         * @param $apiKey
         *
         * @throws \Exception
         * @internal param $method
         *
         */
        public function __Construct($apiKey)
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

            $this->configuration = new Configuration($apiKey);
            $this->client = new Client($this->configuration);
        }
    }