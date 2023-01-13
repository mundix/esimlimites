<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
});

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1'], function () {
    Route::resource('applications', App\Http\Controllers\Api\V1\ApplicationController::class)->only(['index', 'store']);
    Route::resource('client/orders', App\Http\Controllers\Api\V1\ClientOrderController::class)->only(['index', 'store']);
});
