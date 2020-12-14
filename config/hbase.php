<?php

return [
    'pool_size' => \SwFwLess\components\functions\envInt('HBASE_POOL_SIZE', 5),
    'switch' => \SwFwLess\components\functions\envInt('HBASE_SWITCH', 0),
    'host' => \SwFwLess\components\functions\env('HBASE_HOST', '127.0.0.1'),
    'port' => \SwFwLess\components\functions\envInt('HBASE_PORT', 9090),
    'read_timeout' => \SwFwLess\components\functions\envInt('HBASE_READ_TIMEOUT', 5000),
    'write_timeout' => \SwFwLess\components\functions\envInt('HBASE_WRITE_TIMEOUT', 5000),
    'pool_change_event' => \SwFwLess\components\functions\envInt('HBASE_POOL_CHANGE_EVENT', 0),
    'report_pool_change' => \SwFwLess\components\functions\envInt('HBASE_REPORT_POOL_CHANGE', 0),
    'socket_driver' => \SwFwLess\components\functions\env('HBASE_SOCKET_DRIVER', \SwFwLess\components\thrift\TCoroutineSocket::class),
];
