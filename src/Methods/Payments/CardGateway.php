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

        public function __Construct(){
            $this->endpoint = 'payments/card';
        }

        /**
         * @param array $paymentPayload
         *
         * @return bool
         */
        public function createCardPayment(array $paymentPayload)
        {
            return $this->requestInterface->post($paymentPayload, $this->endpoint);
        }
    }