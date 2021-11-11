<?php

return [
    'default' => \SwFwLess\components\functions\env('DB_DEFAULT', 'default'),
    'connections' => [
        \SwFwLess\components\functions\env('DB_DEFAULT', 'default') => [
            'driver' => 'mysql',
            'dsn' => \SwFwLess\components\functions\env('DB_DEFAULT_DSN', 'mysql:dbname=sw_test;host=127.0.0.1'),
            'username' => \SwFwLess\components\functions\env('DB_DEFAULT_USERNAME', 'root'),
            'passwd' => \SwFwLess\components\functions\env('DB_DEFAULT_PASSWD', null),
            'options' => [
                \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_ORACLE_NULLS => \PDO::NULL_NATURAL,
                \PDO::ATTR_STRINGIFY_FETCHES => false,
                \PDO::ATTR_EMULATE_PREPARES => false,
                \PDO::ATTR_PERSISTENT => false,
            ],
            'pool_size' => \SwFwLess\components\functions\envInt('DB_DEFAULT_POOL_SIZE', 5),
            'table_prefix' => \SwFwLess\components\functions\env('DB_DEFAULT_TABLE_PREFIX', ''),
        ],
    ],
    'switch' => \SwFwLess\components\functions\envInt('DB_SWITCH', 0),
    'pool_change_event' => \SwFwLess\components\functions\envInt('DB_POOL_CHANGE_EVENT', 0),
    'report_pool_change' => \SwFwLess\components\functions\envInt('DB_REPORT_POOL_CHANGE', 0),
];
