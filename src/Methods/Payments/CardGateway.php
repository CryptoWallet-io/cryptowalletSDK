<?php

    /**
     * Created by PhpStorm.
     * User: Satoshi
     * Date: 04/03/2016
     * Time: 17:46
     */

    namespace CryptoWallet\Methods\Payments;

    use CryptoWallet\Client;

    class CardGateway extends Client
    {

        public $endpoint;

        public function __Construct($cryptowalletClient){
            $this->cryptowallet = $cryptowalletClient;
            $this->endpoint = 'payments/card';
        }

        /**
         * @param array $paymentPayload
         *
         * @return \Unirest\response
         */
        public function createCardPayment(array $paymentPayload)
        {
            $response = $this->cryptowallet->client->requestInterface->post(
                json_encode($paymentPayload),
                $this->cryptowallet->configuration->apiUrl.$this->cryptowallet->configuration->apiVersion.$this->endpoint
            );
            return $response;
        }
    }