<?php

return [
    'enable' => envBool('APOLLO_ENABLE', false),
    'config_server' => env('APOLLO_CONFIG_SERVER', 'http://127.0.0.1:8080'),
    'app_id' => env('APOLLO_APP_ID', 'sw-fw-less'),
    'cluster' => env('APOLLO_CLUSTER', 'default'),
    'client_ip' => env('APOLLO_CLIENT_IP', '127.0.0.1'),
    'pull_timeout' => envDouble('APOLLO_PULL_TIMEOUT', 10),
    'notification_interval' => envDouble('APOLLO_NOTIFICATION_INTERVAL', 120),
    'namespace' => env('APOLLO_NAMESPACE', 'application'),
    'release_key' => env('APOLLO_RELEASE_KEY', ''),
];
