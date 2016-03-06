<?php

    /**
     * Created by PhpStorm.
     * User: Satoshi
     * Date: 04/03/2016
     * Time: 19:15
     */

    namespace CryptoWallet;

    use CryptoWallet\Authentication\ApiKeyAuthentication as Authentication;

    class HttpClient extends CryptoWallet
    {

        private $apiUrl;
        private $apiVersion;

        public function __construct($apiUrl, $apiVersion, Authentication $authentication)
        {
            $this->apiUrl = rtrim($apiUrl, '/');
            $this->apiVersion = $apiVersion;
            $this->auth = $authentication;
        }
    }