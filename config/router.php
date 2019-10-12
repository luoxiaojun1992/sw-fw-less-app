<?php

return [
    'single' => [
        ['GET', '/ping', [\SwFwLess\services\DemoService::class, 'ping']],
        ['GET', '/redis', [\SwFwLess\services\DemoService::class, 'redis', ['cors']]],
        ['GET', '/mysql', [\SwFwLess\services\DemoService::class, 'mysql']],
        ['GET', '/http', [\SwFwLess\services\DemoService::class, 'http']],
        ['GET', '/es', [\SwFwLess\services\DemoService::class, 'es']],
        ['GET', '/file', [\SwFwLess\services\DemoService::class, 'file']],
        ['GET', '/qiniu', [\SwFwLess\services\DemoService::class, 'qiniu']],
        ['GET', '/rabbitmq', [\SwFwLess\services\DemoService::class, 'rabbitmq']],
        ['GET', '/alioss', [\SwFwLess\services\DemoService::class, 'alioss']],
        ['GET', '/hbase', [\SwFwLess\services\DemoService::class, 'hbase']],
        ['GET', '/cache', [\SwFwLess\services\DemoService::class, 'cache']],
        ['GET', '/jwt', [\SwFwLess\services\DemoService::class, 'jwt']],
        ['GET', '/grpc', [\App\services\GrpcDemoService::class, 'greeting']],
        ['GET', '/log', [\SwFwLess\services\DemoService::class, 'log']],
        ['GET', '/zipkin', [\SwFwLess\services\DemoService::class, 'zipkin']],
    ],
    'group' => [
        '/dining' => [
            ['GET', '/menu', [\SwFwLess\services\DiningService::class, 'menu']],
            ['GET', '/ordered', [\SwFwLess\services\DiningService::class, 'ordered', ['auth']]],
            ['POST', '/order', [\SwFwLess\services\DiningService::class, 'order', ['auth']]],
            ['POST', '/login', [\SwFwLess\services\DiningService::class, 'login']],
        ],
        '/demo' => [
            ['POST', '.Greeting/SayHello', [\App\services\GreetingService::class, 'sayHello']],
        ],
    ],
];
