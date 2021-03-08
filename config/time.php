<?php

return [
    'ntp' => [
        'switch' => \SwFwLess\components\functions\envBool('TIME_NTP_SWITCH', false),
        'servers' => [
            [
                'host' => 'time1.aliyun.com',
                'pool_size' => 1,
            ],
            [
                'host' => 'time2.aliyun.com',
                'pool_size' => 1,
            ],
            [
                'host' => 'time3.aliyun.com',
                'pool_size' => 1,
            ],
        ],
    ]
];
