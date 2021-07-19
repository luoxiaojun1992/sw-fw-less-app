<?php

$serverConfig = [
    'host' => \SwFwLess\components\functions\env('SERVER_HOST', '0.0.0.0'),
    'port' => \SwFwLess\components\functions\envInt('SERVER_PORT', 9501),
    'reactor_num' => \SwFwLess\components\functions\envInt('SERVER_REACTOR_NUM', 8),
    'worker_num' => \SwFwLess\components\functions\envInt('SERVER_WORKER_NUM', 32),
    'daemonize' => \SwFwLess\components\functions\envBool('SERVER_DAEMONIZE', false),
    'backlog' => \SwFwLess\components\functions\envInt('SERVER_BACKLOG', 128),
    'max_request' => \SwFwLess\components\functions\envInt('SERVER_MAX_REQUEST', 0),
    'dispatch_mode' => \SwFwLess\components\functions\envInt('SERVER_DISPATCH_MODE', 2),
    'open_http2_protocol' => \SwFwLess\components\functions\envBool('SERVER_OPEN_HTTP2', false),
    'task_worker_num' => \SwFwLess\components\functions\envInt('SERVER_TASK_WORKER_NUM', 0),
    'task_enable_coroutine' => \SwFwLess\components\functions\envBool('SERVER_TASK_ENABLE_COROUTINE', false),
    'open_tcp_nodelay' => \SwFwLess\components\functions\envBool('SERVER_OPEN_TCP_NODELAY', true),
    'tcp_fastopen' => \SwFwLess\components\functions\envBool('SERVER_TCP_FASTOPEN', true),
    'max_coroutine' => \SwFwLess\components\functions\envInt('SERVER_MAX_COROUTINE', 3000),
    'open_cpu_affinity' => \SwFwLess\components\functions\envBool('SERVER_OPEN_CPU_AFFINITY', true),
    'socket_buffer_size' => \SwFwLess\components\functions\envInt('SERVER_SOCKET_BUFFER_SIZE', 2 * 1024 * 1024),
];

if (!empty($pidFile = \SwFwLess\components\functions\env('SERVER_PID_FILE'))) {
    $serverConfig['pid_file'] = $pidFile;
}

return $serverConfig;
