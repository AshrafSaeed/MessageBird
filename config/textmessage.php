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

	$defaultname = 'messsagebird';

	'messsagebird' => [
        'access_key' => 'NqTN0Wq4kS0QLBfaIjChY0Vr2',
    ],

    'clickatel' => [
        'access_key' => env('MAILGUN_DOMAIN'),
    ],

    'neximo' => [
        'access_key' => env('MAILGUN_DOMAIN'),
    ],

    'stripe' => [
        'access_key' => env('MAILGUN_DOMAIN'),
    ]

]