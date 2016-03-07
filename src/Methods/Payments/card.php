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

        public function __Construct($cryptowallet)
        {
            if(is_object($cryptowallet)){
                $this->client = $cryptowallet->client;
            } else {
                throw new \Exception('You need to initialise the cryptowallet client to use this gateway');
            }
        }


        /**
         * @param array $paymentPayload
         */
        function createCardPayment(array $paymentPayload)
        {

        }
    }