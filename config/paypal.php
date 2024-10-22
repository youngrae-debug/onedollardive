<?php

return [
    'mode'    => env('PAYPAL_MODE', 'sandbox'),
    'sandbox' => [
        'client_id'         => env('PAYPAL_SANDBOX_CLIENT_ID'),
        'client_secret'     => env('PAYPAL_SANDBOX_SECRET'),
        'app_id'            => '',
    ],
    'live' => [
        'client_id'         => env('PAYPAL_LIVE_CLIENT_ID'),
        'client_secret'     => env('PAYPAL_LIVE_SECRET'),
        'app_id'            => '',
    ],
    'payment_action' => 'Sale',
    'currency'       => env('PAYPAL_CURRENCY', 'USD'),
    'notify_url'     => '',
    'locale'         => '',
    'validate_ssl'   => true,
];
