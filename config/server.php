<?php

$serverConfig = [
    'host' => env('SERVER_HOST', '0.0.0.0'),
    'port' => envInt('SERVER_PORT', 9501),
    'reactor_num' => envInt('SERVER_REACTOR_NUM', 8),
    'worker_num' => envInt('SERVER_WORKER_NUM', 32),
    'daemonize' => envBool('SERVER_DAEMONIZE', false),
    'backlog' => envInt('SERVER_BACKLOG', 128),
    'max_request' => envInt('SERVER_MAX_REQUEST', 0),
    'dispatch_mode' => envInt('SERVER_DISPATCH_MODE', 2),
    'open_http2_protocol' => envBool('SERVER_OPEN_HTTP2', false),
    'task_worker_num' => envInt('SERVER_TASK_WORKER_NUM', 0),
    'task_enable_coroutine' => envBool('SERVER_TASK_ENABLE_COROUTINE', false),
    'open_tcp_nodelay' => envBool('SERVER_OPEN_TCP_NODELAY', true),
    'tcp_fastopen' => envBool('SERVER_TCP_FASTOPEN', true),
    'max_coroutine' => envInt('SERVER_MAX_COROUTINE', 3000),
];

if (!empty($pidFile = env('SERVER_PID_FILE'))) {
    $serverConfig['pid_file'] = $pidFile;
}

return $serverConfig;
