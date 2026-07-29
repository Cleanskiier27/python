<?php

return [
    'site' => [
        'name' => 'My PHP Application',
        'url' => 'http://localhost',
        'environment' => 'development',
    ],
    'debug' => true,
    'database' => [
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'port' => 3306,
        'database' => 'app_db',
        'username' => 'root',
        'password' => '',
    ],
    'body' => [
        'title' => 'Welcome to the PHP Settings Example',
        'content' => 'This body section stores page content and presentation settings.',
        'footer' => 'Powered by PHP settings',
    ],
];
