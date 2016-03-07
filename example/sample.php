<?php

    require __DIR__ . '/vendor/autoload.php';

    use CryptoWallet\CryptoWallet;
    use CryptoWallet\Methods\Payments\CardGateway;

    $apiKey = '0000';

    try {
        $cryptowallet = new CryptoWallet($apiKey);
        $cryptowallet->client->gateway = new CardGateway($cryptowallet);
    } catch (\Exception $e) {
        echo($e->getMessage());die;
        //non fatal so do something or die
    }

    $payload = [
        'addressess' =>
            [
                'billing' =>
                    [
                        'name_number' => '12a',
                        'first_line' => 'street1',
                        'second_line' => 'street2',
                        'town_city' => 'town',
                        'state_county' => 'county',
                        'post_zip' => 'aa11 1aa',
                        'country' => 'uk',
                    ],
            ],
        'card' =>
            [
                'long_num' => '4242424242424242',
                'strt_date' => '',
                'exp_date' => '12/2019',
                'ccv' => '123',
                'issue' => '1',
                'card_holder' => 'mr jon a smith',
                'type' => 'visa',
            ],
        'transaction' =>
            [
                'amount' => '12.00',
            ],
    ];

    $response = $cryptowallet->client->gateway->createCardPayment($payload);

    d(json_decode($response->raw_body,true));die;