<?php

return [
    'base_path' => \SwFwLess\components\functions\env('APP_BASE_PATH', APP_BASE_PATH),
    'switch' => \SwFwLess\components\functions\envInt('STORAGE_SWITCH', 0),
    'storage_path' => \SwFwLess\components\functions\env('STORAGE_PATH', __DIR__ . '/../runtime/storage/'),
    'types' => \SwFwLess\components\functions\envArray('STORAGE_TYPES', ['file', 'qiniu', 'alioss']),
    'ext' => [
        'qiniu' => [
            'default_bucket' => \SwFwLess\components\functions\env('QINIU_DEFAULT_BUCKET', 'default'),
            'buckets' => [
                \SwFwLess\components\functions\env('QINIU_DEFAULT_BUCKET', 'default') => [
                    'access_key' => \SwFwLess\components\functions\env('QINIU_DEFAULT_ACCESS_KEY', ''),
                    'secret_key' => \SwFwLess\components\functions\env('QINIU_DEFAULT_SECRET_KEY', ''),
                    'domain' => \SwFwLess\components\functions\env('QINIU_DEFAULT_DOMAIN', ''),
                ],
            ],
        ],
        'alioss' => [
            'default_bucket' => \SwFwLess\components\functions\env('ALIOSS_DEFAULT_BUCKET', 'default'),
            'buckets' => [
                \SwFwLess\components\functions\env('ALIOSS_DEFAULT_BUCKET', 'default') => [
                    'access_id' => \SwFwLess\components\functions\env('ALIOSS_DEFAULT_ACCESS_ID', ''),
                    'access_secret' => \SwFwLess\components\functions\env('ALIOSS_DEFAULT_ACCESS_SECRET', ''),
                    'endpoint' => \SwFwLess\components\functions\env('ALIOSS_DEFAULT_ENDPOINT', ''),
                    'timeout' => \SwFwLess\components\functions\envDouble('ALIOSS_DEFAULT_TIMEOUT', 1),
                    'connectTimeout' => \SwFwLess\components\functions\envDouble('ALIOSS_DEFAULT_CONNECT_TIMEOUT', 1),
                    'isCName' => \SwFwLess\components\functions\envBool('ALIOSS_DEFAULT_IS_CNAME', false),
                    'securityToken' => \SwFwLess\components\functions\env('ALIOSS_DEFAULT_SECURITY_TOKEN', null),
                    'domain' => \SwFwLess\components\functions\env('ALIOSS_DEFAULT_DOMAIN', ''),
                ],
            ],
        ],
    ],
];
