<?php

return [
    
    // Drivers to use. Trying from top to bottom until we get some data.
    'drivers' => [
        new \Xenokore\IpInfo\Drivers\IpApiDriver(),
    ],

    'guzzle_config' => [
        'verify' => false,
    ]
];