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
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'google' => [
        'client_id' => '720731301975-ee78rbbev9n46gqm1cgdrid3mmmcbu86.apps.googleusercontent.com',
        'client_secret' => 'b7aYYutHrlplbBUIa7SE9Bi4',
        'redirect' => 'http://localhost/auth/google/callback',
    ],

    'facebook' => [
        'client_id' => '282036452530649',
        'client_secret' => '',
        'redirect' =>  'http://localhost/auth/facebook/callback',
     ],

];
