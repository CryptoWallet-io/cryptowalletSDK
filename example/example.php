<?php

    /**
     * Created by PhpStorm.
     * User: Satoshi
     * Date: 04/03/2016
     * Time: 18:11
     */

    use CryptoWallet\Configuration;
    use CryptoWallet\Payments\CardGateway;

    require_once('../vendor/autoload.php');

    private $apiKey = '00000';
    private $apiSecret = '00000';

    $configuration = Configuration::apiKey($apiKey, $apiSecret);