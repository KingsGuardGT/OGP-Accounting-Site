<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        // Set GOOGLE_MAPS_API_KEY in your .env file
        'maps_key' => env('GOOGLE_MAPS_API_KEY'),
    ],

    'serpapi' => [
        // Set SERPAPI_API_KEY in your .env file
        'key' => env('SERPAPI_API_KEY'),
    ],

    'newsapi' => [
        // Set NEWSAPI_KEY in your .env file
        'key' => env('NEWSAPI_KEY'),
    ],

    'newsdata' => [
        // Set NEWSDATA_API_KEY in your .env file
        'key' => env('NEWSDATA_API_KEY', env('NEWSDATA_KEY')),
        'base' => env('NEWSDATA_BASE', 'https://newsdata.io/api/1'),
    ],

];
