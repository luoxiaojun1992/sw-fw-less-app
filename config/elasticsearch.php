<?php

return [
    'connections' => [
        'default' => [
            'hosts' => [
                \SwFwLess\components\functions\env('ES_DEFAULT_HOST', '127.0.0.1:9200'),
            ],
            'timeout' => \SwFwLess\components\functions\envDouble('ES_TIMEOUT', 1),
        ],
    ],
    'switch' => \SwFwLess\components\functions\envInt('ES_SWITCH', 0),
];
