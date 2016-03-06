<?php

    /**
     * Created by PhpStorm.
     * User: jkirkby91
     * Date: 04/03/2016
     * Time: 18:08
     */

    namespace CryptoWallet;

    if (version_compare(PHP_VERSION, '5.4.0', '<')) {
        throw new \Exception('The CryptoWallet SDK requires PHP version 5.4 or higher.');
    }
    if (!function_exists('curl_init')) {
        throw new \Exception('CryptoWallet needs the CURL PHP extension.');
    }
    if (!function_exists('json_decode')) {
        throw new \Exception('CryptoWallet needs the JSON PHP extension.');
    }

    abstract class CryptoWallet{}