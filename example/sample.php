<?php

    use CryptoWallet\CryptoWallet;
    use CryptoWallet\Methods\Payments\CardGateway;

    require __DIR__ . '/vendor/autoload.php';

    $apiKey = '090909';

    try {
        $cryptowallet = new CryptoWallet($apiKey,new CardGateway());
    } catch (\Exception $e) {
        echo($e->getMessage());die;
        //non fatal so do something or die
    }

    d($cryptowallet->client->createCardPayment(array (
                'addressess' =>
                    array (
                        'billing' =>
                            array (
                                'name_number' => '12a',
                                'first_line' => 'street1',
                                'second_line' => 'street2',
                                'town_city' => 'town',
                                'state_county' => 'suffolk',
                                'post_zip' => 'ip31 3lu',
                                'country' => 'uk',
                            ),
                    ),
                'card' =>
                    array (
                        'long_num' => '4242424242424242',
                        'strt_date' => '',
                        'exp_date' => '12/2019',
                        'ccv' => '123',
                        'issue' => '1',
                        'card_holder' => 'mr jon a smith',
                        'type' => 'visa',
                    ),
                'transaction' =>
                    array (
                        'amount' => '12.00',
                    ),
            )
        )
    );