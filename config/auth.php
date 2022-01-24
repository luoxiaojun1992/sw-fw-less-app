<?php

return [
    'guard' => \SwFwLess\components\functions\env('AUTH_GUARD', 'token'),
    'guards' => [
        'jwt' => [
            'guard' => \SwFwLess\components\auth\jwt\Guard::class,
            'user_provider' => \SwFwLess\components\auth\jwt\JwtUser::class,
            'credential_key' => \SwFwLess\components\functions\env('AUTH_JWT_CREDENTIAL_KEY', 'Authorization'),
            'sign_key' => \SwFwLess\components\functions\env('AUTH_JWT_SIGN_KEY', ''),
            'jid' => \SwFwLess\components\functions\env('AUTH_JWT_JID', ''),
            'expiration' => \SwFwLess\components\functions\envInt('AUTH_JWT_EXPIRATION', 86400),
        ],
    ],
];
