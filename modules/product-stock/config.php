<?php

return [
    '__name' => 'product-stock',
    '__version' => '0.0.2',
    '__git' => 'git@github.com:getmim/product-stock.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/product-stock' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'product' => NULL
            ]
        ],
        'optional' => [
            [
                'product-variant' => NULL
            ]
        ]
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'product' => [
                'stock' => [
                    'type' => 'number'
                ]
            ],
            'product-variant' => [
                'stock' => [
                    'type' => 'number'
                ]
            ]
        ]
    ]
];
