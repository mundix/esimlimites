<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
});

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1'], function () {
    Route::resource('applications', App\Http\Controllers\Api\V1\ApplicationController::class)->only(['index', 'store']);
    Route::resource('clients', App\Http\Controllers\Api\V1\ClientOrderController::class)->only(['index', 'store']);
});

Route::post('register', [\App\Http\Controllers\Api\V1\RegisterController::class, 'register']);
Route::post('login', [\App\Http\Controllers\Api\V1\RegisterController::class, 'login']);

Route::middleware('auth:api')->group( function () {
    Route::resource('products', \App\Http\Controllers\Api\V1\ProductController::class);
});
