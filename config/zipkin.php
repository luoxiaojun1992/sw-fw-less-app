<?php

return [
    'service_name' => \SwFwLess\components\functions\env('ZIPKIN_SERVICE_NAME', 'Sw-Fw-Less'),
    'endpoint_url' => \SwFwLess\components\functions\env('ZIPKIN_ENDPOINT_URL', 'http://localhost:9411/api/v2/spans'),
    'sample_rate' => \SwFwLess\components\functions\envInt('ZIPKIN_SAMPLE_RATE', 0),
    'body_size' => \SwFwLess\components\functions\envInt('ZIPKIN_BODY_SIZE', 5000),
    'curl_timeout' => \SwFwLess\components\functions\envInt('ZIPKIN_CURL_TIMEOUT', 1),
    'redis_options' => [
        'queue_name' => \SwFwLess\components\functions\env('ZIPKIN_REDIS_QUEUE_NAME', 'queue:zipkin:span'),
        'connection' => \SwFwLess\components\functions\env('ZIPKIN_REDIS_CONNECTION', 'zipkin'),
    ],
    'report_type' => \SwFwLess\components\functions\env('ZIPKIN_REPORT_TYPE', 'http'),
];
