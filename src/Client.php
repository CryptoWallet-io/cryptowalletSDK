<?php

    /**
     * Created by PhpStorm.
     * User: jkirkby91
     * Date: 04/03/2016
     * Time: 19:14
     */

    namespace CryptoWallet;

    class Client extends CryptoWallet {

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
                $configuration->createHttpClient()
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
         * Decodes api response to php array
         *
         * @return mixed
         * @throws \Exception
         */
        public function decodeLastResponse()
        {
            if ($response = $this->http->getLastResponse()) {
                return json_decode($response,true);
            } else {
                throw new \Exception('Unable to decode response',500);
            }
        }

        /**
         * @param $paymentPayload
         */
        function createCardPayment($paymentPayload)
        {

        }
    }