<?php

    /**
     * Created by PhpStorm.
     * User: jkirkby91
     * Date: 04/03/2016
     * Time: 19:14
     */

    namespace CryptoWallet;

    class Client {

        /**
         * @param Configuration $configuration
         */
        public function __construct(Configuration $configuration)
        {
            $this->http = $configuration->createHttpClient($configuration->apiKey);
        }

        /**
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