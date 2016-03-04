<?php

    /**
     * Created by PhpStorm.
     * User: jkirkby91
     * Date: 04/03/2016
     * Time: 19:07
     */

    namespace CryptoWallet\Authentication;

    class ApiKeyAuthentication {

        private $apiKey;
        private $apiSecret;

        public function __construct($apiKey)
        {
            $this->apiKey = $apiKey;
        }

        /**
         * Gets an API Key
         * @return mixed
         */
        public function getApiKey()
        {
            return $this->apiKey;
        }

        /**
         * Sets and API Key
         * @param $apiKey
         */
        public function setApiKey($apiKey)
        {
            $this->apiKey = $apiKey;
        }
    }