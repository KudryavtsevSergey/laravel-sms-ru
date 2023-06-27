<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Sun\SmsRu\Http\Controllers\SmsRuCallbackController;

Route::get('status', [
    'uses' => SmsRuCallbackController::class,
    'as' => SmsRuCallbackController::STATUS_ROUTE_NAME,
]);
