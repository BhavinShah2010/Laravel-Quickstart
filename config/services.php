<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
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

    'facebook' => [
        'client_id' => '1041008185968780',
        'client_secret' => 'ef4f74f090472cd9c37ea3e01b7659d1',
        'redirect' => 'http://local.laravel.login/dashboard',
    ],

    'twitter' => [
        'client_id' => 'F7eP6LcYd5zpepS8rOWLyp46C',
        'client_secret' => 'WhUcJPPxhTYxZFZrtW6QJh7C4MbCPL5RXcD2yOTIB5H2qREJgG',
        'redirect' => 'http://local.laravel.login/dashboard',
    ],

    'google' => [
        'client_id' => '1063431924152-31kp2vik08bpb6re8r8c4oqrj91kmnkv.apps.googleusercontent.com',
        'client_secret' => 'g0ueaxCvgsYXF3Ej56cMCQst',
        'redirect' => 'http://local.laravel.login/dashboard',
    ],

    'github' => [
        'client_id' => '2140ccb647a8d3cffd8a',
        'client_secret' => '7b66b540d6774750657e740b1f9cadb6ac52fa48',
        'redirect' => 'http://local.laravel.login/dashboard',
    ],

    'linkedin' => [
        'client_id' => '75hcsf1e01c0wj',
        'client_secret' => 'D7RCAtwY5T1pOEoy',
        'redirect' => 'http://local.laravel.login/dashboard',
    ],


    'pinterest' => [
        'client_id' => '4835194336377324400',
        'client_secret' => '123d7d30282d1554c61b56fc1d075321b056af6d3fb27364b846315854fd7ac2',
        'redirect' => 'http://local.laravel.login/dashboard',
    ],

    'instagram' => [
        'client_id' => 'cf16c409f8ad4e4bb1a5fd4bb680b16e',
        'client_secret' => '851ac40488374472b491a42906ec6e65',
        'redirect' => 'http://local.laravel.login/dashboard',
    ],


    'dropbox' => [
        'client_id' => 'ysrepi3zupyhzwn',
        'client_secret' => 'xllf4t3i44o6so6',
        'redirect' => 'http://local.laravel.login/dashboard',
    ],





];
