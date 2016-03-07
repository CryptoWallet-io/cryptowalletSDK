The cryptowallet PHP SDK allows easy communication with the cryptowallet api.

To instantiate the client

        $cryptowallet = new CryptoWallet($apiKey);

To produce a gateway for your method

        $cryptowallet->client->gateway = new CardGateway($cryptowallet);


Examples can be found in the example folder

To install run

composer require crypto-wallet-io/cryptowallet-sdk