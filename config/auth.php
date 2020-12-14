<?php

return [
    'guard' => \SwFwLess\components\functions\env('AUTH_GUARD', 'token'),
    'guards' => [
        'token' => [
            'guard' => \SwFwLess\components\auth\token\Guard::class,
            'user_provider' => \SwFwLess\models\TokenUser::class,
            'credential_key' => \SwFwLess\components\functions\env('AUTH_TOKEN_CREDENTIAL_KEY', 'auth_token'),
        ],
        'jwt' => [
            'guard' => \SwFwLess\components\auth\jwt\Guard::class,
            'user_provider' => \SwFwLess\models\JwtUser::class,
            'credential_key' => \SwFwLess\components\functions\env('AUTH_JWT_CREDENTIAL_KEY', 'Authorization'),
            'sign_key' => \SwFwLess\components\functions\env('AUTH_JWT_SIGN_KEY', ''),
            'jid' => \SwFwLess\components\functions\env('AUTH_JWT_JID', ''),
            'expiration' => \SwFwLess\components\functions\envInt('AUTH_JWT_EXPIRATION', 86400),
        ],
        'basic' => [
            'guard' => \SwFwLess\components\auth\basic\Guard::class,
            'user_provider' => \SwFwLess\models\BasicUser::class,
            'credential_key' => \SwFwLess\components\functions\env('AUTH_BASIC_CREDENTIAL_KEY', 'Authorization'),
        ],
    ],
];
