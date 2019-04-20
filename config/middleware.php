<?php

return [
    'middleware' => [
        \SwFwLess\components\zipkin\Middleware::class,
        \SwFwLess\components\chaos\Middleware::class,
        \SwFwLess\middlewares\Cors::class,
//        \SwFwLess\components\auth\Middleware::class,
    ],
    'routeMiddleware' => [
        \SwFwLess\components\ratelimit\Middleware::class,
    ],
];
