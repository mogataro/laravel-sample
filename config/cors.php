<?php

/*
|--------------------------------------------------------------------------
| Laravel CORS
|--------------------------------------------------------------------------
|
| allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
| to accept any value.
|
*/

if (env('APP_ENV') == 'local') {
    return [
        'supportsCredentials' => true,
        'allowedOrigins' => ['http://localhost:*'],
        'allowedOriginsPatterns' => [],
        'allowedHeaders' => ['*'],
        'allowedMethods' => ['*'],
        'exposedHeaders' => [],
        'maxAge' => 0,
    ];
} else {
    return [];
}
