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
        ['GET', '/ntp', [\SwFwLess\services\DemoService::class, 'ntp']],
        ['GET', '/translate', [\SwFwLess\services\DemoService::class, 'translate']],
        ['GET', '/math', [\SwFwLess\services\DemoService::class, 'math']],
        ['POST', '/postjson', [\SwFwLess\services\DemoService::class, 'postJson']],
        ['GET', '/volcano', [\SwFwLess\services\DemoService::class, 'volcano']],
    ],
    'resource' => [
        ['/resource', \SwFwLess\services\DemoService::class, []],
    ],
    'grpc' => [
        'demo' => [
            'Greeting' => [
                'SayHello' => [\App\services\GreetingService::class, []]
            ]
        ]
    ],
    'group' => [
//        '/demo' => [
//            ['POST', '.Greeting/SayHello', [\App\services\GreetingService::class, 'SayHello']],
//        ],
    ],
];
