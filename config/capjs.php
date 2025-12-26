<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Cap.js Keys
    |--------------------------------------------------------------------------
    |
    | This value is the site, and the secret key of your application.
    | Cap.js might not require these by default, but they are available
    | for custom worker endpoints.
    |
    */
    'capjs_site_key' => env('CAPJS_SITE_KEY', null),

    'capjs_secret_key' => env('CAPJS_SECRET_KEY', null),

    'capjs_script_url' => env('CAPJS_SCRIPT_URL', 'https://captcha.gurl.eu.org/cap.min.js'),

    'capjs_api_endpoint' => env('CAPJS_API_ENDPOINT', 'https://captcha.gurl.eu.org/api/validate'),

    /*
    |--------------------------------------------------------------------------
    | Error Messages
    |--------------------------------------------------------------------------
    |
    | Here you can find the error messages for the application. You can modify
    | or translate the error message as you like.
    |
    */
    'error_messages' => [
        'capjs_check_message' => 'The CAPTCHA thinks you are a robot! Please refresh and try again.',
    ],
];
