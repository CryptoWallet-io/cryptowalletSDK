<?php

    /**
     * Created by PhpStorm.
     * User: Satoshi
     * Date: 04/03/2016
     * Time: 17:46
     */

    namespace CryptoWallet\Payments;

    class CardGateway {

        public function __Construct(){}

        function createTransaction()
        {
            Unirest::post('https://192.168.99.100:32768/api/v1/payments/card', $headers = array(), $body = NULL, $username = NULL, $password = NULL)
            return 'Hello World';
        }
    }