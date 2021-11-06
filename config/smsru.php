<?php

return [
    'gateway' => env('SMSRU_GATEWAY'),
    'username' => env('SMSRU_USERNAME'),
    'password' => env('SMSRU_PASSWORD'),
    'api_id' => env('SMSRU_API_ID'),

    /**
     * Possible values: api_id, login_password, login_password_secure
     */
    'auth_type' => env('SMSRU_AUTH_TYPE', 'api_id'),
];
