<?php

/*
|--------------------------------------------------------------------------
| Example structure
|--------------------------------------------------------------------------
|
| doctrine-odm  ->  The driver to be used by the facilitator
| facilitator   ->  Class name facilitator. The facilitator is responsible
|                   for opening the connection to the database
|
| Note: The other settings are the responsibility of the driver are
| requirements , not being compulsory for the facilitator .
|
*/

return [
    'driver' => 'doctrine-odm',

    'doctrine-odm' => [
        'facilitator' => \App\Facilitator\Database\Drivers\DoctrineORM::class,
        'connection' => [
            'user' => 'root',
            'password' => '123456',
            'server' => 'localhost',
            'dbname' => 'projetosoftware',
            'port' => '3306',
            'driver' => 'pdo_mysql',
            'charset' => 'utf8',
        ],
        'configuration' => [
            'ProxyDir' =>  __DIR__ . '/../cache/DoctrineORM/Proxy/',
            'DirectoryMapping' => __DIR__ . '/src/Mapper/',
        ]
    ],

    'doctrine-orm' => [],

    'pdo' => []
];