<?php

    /**
     * Created by PhpStorm.
     * User: jkirky91
     * Date: 04/03/2016
     * Time: 18:40
     */

    namespace CryptoWallet;

    class Configuration {

        const DEFAULT_API_URL = 'https://cryptowalet.io/api/';
        const DEFAULT_API_VERSION = 'v1/';

        private $apiUrl;
        private $apiVersion;

        public function __construct($apiKey)
        {
            $this->apiKey = $apiKey;
            $this->apiUrl = self::DEFAULT_API_URL;
            $this->apiVersion = self::DEFAULT_API_VERSION;
        }

        /**
         * Returns a http client interface
         *
         * @return HttpClient
         */
        public function createHttpClient()
        {
            return new HttpClient($this->apiKey,$this->apiUrl,$this->apiVersion);
        }
    }