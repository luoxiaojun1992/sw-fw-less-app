<?php

return [
    'pool_size' => \SwFwLess\components\functions\envInt('AMQP_POOL_SIZE', 5),
    'switch' => \SwFwLess\components\functions\envInt('AMQP_SWITCH', 0),
    'prefix' => \SwFwLess\components\functions\env('AMQP_PREFIX', 'sw-fw-less:'),
    'channel_id' => \SwFwLess\components\functions\envInt('AMQP_CHANNEL_ID', 1),
    'host' => \SwFwLess\components\functions\env('AMQP_HOST', '127.0.0.1'),
    'port' => \SwFwLess\components\functions\envInt('AMQP_PORT', 5672),
    'user' => \SwFwLess\components\functions\env('AMQP_USER', 'guest'),
    'passwd' => \SwFwLess\components\functions\env('AMQP_PASSWD', 'guest'),
    'vhost' => \SwFwLess\components\functions\env('AMQP_VHOST', '/'),
    'locale' => \SwFwLess\components\functions\env('AMQP_LOCALE', 'en_US'),
    'read_timeout' => \SwFwLess\components\functions\envInt('AMQP_READ_TIMEOUT', 3),
    'keepalive' => \SwFwLess\components\functions\envBool('AMQP_KEEPALIVE', false),
    'write_timeout' => \SwFwLess\components\functions\envInt('AMQP_WRITE_TIMEOUT', 3),
    'heartbeat' => \SwFwLess\components\functions\envInt('AMQP_HEARTBEAT', 0),
    'pool_change_event' => \SwFwLess\components\functions\envInt('AMQP_POOL_CHANGE_EVENT', 0),
    'report_pool_change' => \SwFwLess\components\functions\envInt('AMQP_REPORT_POOL_CHANGE', 0),
    'socket_driver' => \SwFwLess\components\functions\env(
        'AMQP_SOCKET_DRIVER', \SwFwLess\components\amqp\CoroutineSocketIO::class
    ),
];
