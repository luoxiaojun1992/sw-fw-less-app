<?php

return [
    'enable' => \SwFwLess\components\functions\envBool('APOLLO_ENABLE', false),
    'config_server' => \SwFwLess\components\functions\env('APOLLO_CONFIG_SERVER', 'http://127.0.0.1:8080'),
    'app_id' => \SwFwLess\components\functions\env('APOLLO_APP_ID', 'sw-fw-less'),
    'cluster' => \SwFwLess\components\functions\env('APOLLO_CLUSTER', 'default'),
    'client_ip' => \SwFwLess\components\functions\env('APOLLO_CLIENT_IP', '127.0.0.1'),
    'pull_timeout' => \SwFwLess\components\functions\envDouble('APOLLO_PULL_TIMEOUT', 10),
    'notification_interval' => \SwFwLess\components\functions\envDouble('APOLLO_NOTIFICATION_INTERVAL', 120),
    'namespace' => \SwFwLess\components\functions\env('APOLLO_NAMESPACE', 'application'),
    'release_key' => \SwFwLess\components\functions\env('APOLLO_RELEASE_KEY', ''),
];
