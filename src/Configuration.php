<?php

    /**
     * Created by PhpStorm.
     * User: jkirky91
     * Date: 04/03/2016
     * Time: 18:40
     */

    namespace CryptoWallet;

    use CryptoWallet\Authentication\ApiKeyAuthentication;
    use Unirest\Request;

    const DEFAULT_API_URL = 'https://cryptowalet.io/api/';
    const DEFAULT_API_VERSION = 'v1/';

    class Configuration {

        /**
         * Creates a new configuration with API key authentication.
         *
         * @param $apiKey
         *
         * @return static
         */
        public static function apiKey($apiKey)
        {
            return new static(
                new ApiKeyAuthentication($apiKey)
            );
        }

        /**
         *
         */
        public function createHttpClient()
        {
            $httpClient = new Request();

            $httpClient->defaultHeaders([
                    'Content-Type'  => 'application/json',
                    'X-Authorization'   => $this->getA
                ]);
        }
    }