<?php

    /**
     * Created by PhpStorm.
     * User: Satoshi
     * Date: 04/03/2016
     * Time: 19:14
     */

    namespace CryptoWallet;

    class Client {

        /**
         * Creates a new CryptoWallet client.
         *
         * @param Configuration $configuration
         *
         * @return static
         */
        public static function create(Configuration $configuration)
        {
            return new static(
                $configuration->createHttpClient(),
                $configuration->createMapper()
            );
        }

        /**
         * @param HttpClient $http
         */
        public function __construct(HttpClient $http)
        {
            $this->http = $http;
        }

        /**
         * @param $paymentPayload
         */
        function createCardPayment($paymentPayload)
        {

        }
    }