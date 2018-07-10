<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'meetup' => [
    'client_id' => env('MEETUP_KEY'),
    'client_secret' => env('MEETUP_SECRET'),
    'redirect' => env('MEETUP_REDIRECT_URI')
    ],

    'google' => [
    'client_id' => env('GOOGLE_ID'),
    'client_secret' => env('GOOGLE_SECRET'),
    'redirect' => env('GOOGLE_REDIRECT_URI')
    ],
    'firebase' => [
    'api_key' => 'AIzaSyDjahH7yAJ9i8kss7S1EeBQATWp5XwJGLE', // Only used for JS integration
    'auth_domain' => 'prueba2-61307.firebaseapp.com', // Only used for JS integration
    'database_url' => 'https://prueba2-61307.firebaseio.com',
    'secret' => 'lPuKSo17mh2w86eAX6S7axSHidpPpGlpo3mC97Ua',
    'storage_bucket' => 'prueba2-61307.appspot.com', // Only used for JS integration
]

];
