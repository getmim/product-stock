<?php

return [
    'Product\\Model\\Product' => [
        'fields' => [
            'stock' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => true,
                    'nulll' => false,
                    'default' => 0
                ],
                'index' => 9600
            ]
        ]
    ],
    'ProductVariant\\Model\\ProductVariant' => [
        'fields' => [
            'stock' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => true,
                    'nulll' => false,
                    'default' => 0
                ],
                'index' => 6500
            ]
        ]
    ]
];
