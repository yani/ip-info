<?php

return [
    
    // Drivers to use. Trying from top to bottom until we get some data.
    'drivers' => [
        new \Yani\IpInfo\Drivers\IpApiDriver(),
    ],

    'guzzle_config' => [
        'verify' => false,
    ]
];