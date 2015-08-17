<?php

return [
    'app' => [
        'url' => getenv('URL'),
        'hash' => [
            'algo' => PASSWORD_BCRYPT,
            'cost' => 10
        ]
    ],
    'db' => [
        'driver' => 'mysql',
        'host' => getenv('IP'),
        'database' => 'todo',
        'username' => getenv('C9_USER'),
        'password' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => ''
    ],
    'auth' => [
        'session' => 'user_id',
        'remember' => 'user_r'
    ],
    'mail' => [
        'smtp_auth' => true,
        'smtp_secure' => 'tls',
        'host' => 'smtp.gmail.com',
        'username' => getenv('EMAIL_USER'),
        'password' => getenv('EMAIL_PASS'),
        'port' => 587,
        'html' => true
    ],
    'twig' => [
        'debug' => true
    ],
    'csrf' => [
        'session' => 'csrf_token'
    ]
];