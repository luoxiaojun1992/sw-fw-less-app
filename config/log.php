<?php

return [
    'path' => \SwFwLess\components\functions\env('LOG_PATH', __DIR__ . '/../runtime/logs/app-{date}.log'),
    'level' => \SwFwLess\components\functions\envInt('LOG_LEVEL', \Monolog\Logger::DEBUG),
    'pool_size' => \SwFwLess\components\functions\envInt('LOG_POOL_SIZE', 100),
    'buffer_max_size' => \SwFwLess\components\functions\envInt('LOG_BUFFER_MAX_SIZE', 10),
    'sync_levels' => [
        \Monolog\Logger::ERROR
    ],
    'name' => \SwFwLess\components\functions\env('LOG_NAME', 'sw-fw-less'),
    'reserve_days' => \SwFwLess\components\functions\envInt('LOG_RESERVE_DAYS', 3),
    'switch' => \SwFwLess\components\functions\envInt('LOG_SWITCH', 0),
];
