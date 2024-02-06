<?php

// config for donejeh/nuban

return [


    // The Host of the API.
    'host' => env('NUB_API_HOST', 'https://nubapi.com/api'),


    /**
     * Your API Token from (https://nubapi.com/user/api-tokens)
     *
     */
    'api_token' => env('NUB_API_TOKEN', '6uia7wa7erb9gYBJWDIQTVPdxnXDmKUE4lwpip2b3a2e45fd'),



     'options' => [
            // Validate number on your server without making an APi request.
            'validate_number_locally' => true,

             //This timeout applies to client connections and determine when
             //The whole response must be read before it exceeded
             'request_timeout' => 5,

        ]



];
