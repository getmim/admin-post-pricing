<?php

return [
    '__name' => 'admin-post-pricing',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/admin-post-pricing.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/admin-post-pricing' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'content-pricing' => NULL
            ],
            [
                'post' => NULL
            ],
            [
                'admin-post' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ]
];