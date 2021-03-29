<?php

return [
    //Cors
    'cors' => [
        'origin' => \SwFwLess\components\functions\env('CORS_ORIGIN', ''),
        'switch' => \SwFwLess\components\functions\envInt('CORS_SWITCH', 0),
    ],

    //Timezone
    'timezone' => \SwFwLess\components\functions\env('TIMEZONE', 'PRC'),

    //Monitor
    'monitor' => [
        'switch' => \SwFwLess\components\functions\envInt('MONITOR_SWITCH', 0),
    ],

    //Throttle
    'throttle' => [
        'metric' => function(\SwFwLess\components\http\Request $request){
            return $request->getRoute();
        },
        'period' => \SwFwLess\components\functions\envInt('THROTTLE_PERIOD', 60),
        'throttle' => \SwFwLess\components\functions\envInt('THROTTLE_THROTTLE', 10000),
    ],

    //RedLock
    'red_lock' => [
        'connection' => \SwFwLess\components\functions\env('RED_LOCK_CONNECTION', 'red_lock'),
    ],

    //RateLimit
    'rate_limit' => [
        'connection' => \SwFwLess\components\functions\env('RATE_LIMIT_CONNECTION', 'rate_limit'),
    ],

    //Cache
    'cache' => [
        'connection' => \SwFwLess\components\functions\env('CACHE_CONNECTION', 'cache'), //redis connection
        'update_lock_ttl' => \SwFwLess\components\functions\envInt('CACHE_UPDATE_LOCK_TTL', 10),
    ],

    //Hot Reload
    'hot_reload' => [
        'switch' => \SwFwLess\components\functions\envInt('HOT_RELOAD_SWITCH', 0),
        'watch_dirs' => [
            __DIR__ . '/',
            __DIR__ . '/../app/',
            __DIR__ . '/../vendor/',
            __DIR__ . '/../',
        ],
        'excluded_dirs' => [],
        'watch_suffixes' => ['.php', '.env'],
        'driver' => \SwFwLess\components\functions\env('HOT_RELOAD_DRIVER', \Kwf\FileWatcher\Watcher::class), //HuangYi\Watcher\Watcher::class is another choice
    ],

    //Error handler
    'error_handler' => [
        'err_formatter' => function (\Throwable $e) {
            return nl2br($e->getMessage() . PHP_EOL . $e->getTraceAsString());
        },
    ],

    //Ip Restriction
    'ip_restriction' => [
        'ips' => \SwFwLess\components\functions\env('IP_RESTRICTION_IPS'),
        'api_prefix' => \SwFwLess\components\functions\env('IP_RESTRICTION_API_PREFIX'),
    ],

    //Scheduler
    'scheduler' => [
//        [
//            'schedule' => '* * * * *',
//            'jobs' => function () {
//                echo 'Every minute', PHP_EOL;
//            },
//        ],
//        [
//            'schedule' => '*/2 * * * *',
//            'jobs' => function () {
//                echo 'Every two minutes', PHP_EOL;
//            },
//        ],
    ],

    //You can turn off the switch to improve the performance
    'route_di_switch' => \SwFwLess\components\functions\envBool('ROUTE_DI_SWITCH', false),

    //You can turn off the switch to improve the performance
    'di_switch' => \SwFwLess\components\functions\envBool('DI_SWITCH', true),
];
