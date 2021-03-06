<?php

return [
    'code' => '93',
    'patterns' => [
        'national' => [
            'general' => '/^[2-7]\d{8}$/',
            'fixed' => '/^(?:[25][0-8]|[34][0-4]|6[0-5])[2-9]\d{6}$/',
            'mobile' => '/^7[057-9]\d{7}$/',
            'emergency' => '/^1(?:02|19)$/',
        ],
        'possible' => [
            'general' => '/^\d{7,9}$/',
            'mobile' => '/^\d{9}$/',
            'emergency' => '/^\d{3}$/',
        ],
    ],
];
