<?php

use Illuminate\Support\Facades\Route;
use Sun\SmsRu\Http\Controllers\SmsRuCallbackController;

Route::get('status', [
    'uses' => 'SmsRuCallbackController@status',
    'as' => SmsRuCallbackController::STATUS_ROUTE_NAME,
]);
