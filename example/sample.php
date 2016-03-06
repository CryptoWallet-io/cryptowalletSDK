<?php

    require __DIR__ . '/vendor/autoload.php';

    use CryptoWallet\Client;
    use CryptoWallet\Configuration;

    $apiKey = '090909';

    try {
        $cryptowallet = new \CryptoWallet\CryptoWallet($apiKey);
    } catch (\Exception $e) {
        echo($e->getMessage());die;
        //non fatal so do something or die
    }

d($cryptowallet);