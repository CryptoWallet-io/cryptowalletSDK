The cryptowallet PHP SDK allows easy communication with the cryptowallet api.

#To install the SDK run

        composer require crypto-wallet-io/cryptowallet-sdk
        
        
#To instantiate the client

        $cryptowallet = new CryptoWallet($apiKey);

#To produce a gateway for your method

        $cryptowallet->client->gateway = new CardGateway($cryptowallet);


#Example code

Example code can be found in the 'Example' folder

to install
        
        $ cd Example
        $ composer install
