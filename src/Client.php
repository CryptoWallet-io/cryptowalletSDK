<?php

    /**
     * Created by PhpStorm.
     * User: jkirkby91
     * Date: 04/03/2016
     * Time: 19:14
     */

    namespace CryptoWallet;

    class Client {

        public $requestInterface;

        /**
         * @param Configuration $configuration
         */
        public function __Construct(Configuration $configuration)
        {
            $this->requestInterface = $configuration->createHttpClient($configuration->apiKey);
        }
    }