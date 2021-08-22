<?php

return [
    'switch' => \SwFwLess\components\functions\envInt('POOL_SWITCH', 1),
    'objects' => [
        \SwFwLess\components\router\Router::class => [
            'pool_size' => \SwFwLess\components\functions\envInt('ROUTER_POOL_SIZE', 5),
        ],
        \SwFwLess\components\http\Request::class => [
            'pool_size' => \SwFwLess\components\functions\envInt('HTTP_REQUEST_POOL_SIZE', 5),
        ],
        \SwFwLess\services\DemoService::class => [
            'pool_size' => 5,
        ]
    ],
];
