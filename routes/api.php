<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductAPIController;
use App\Http\Controllers\Api\CartController;

Route::get('/products', [ProductAPIController::class, 'index']);

Route::post('/cart/add', [CartController::class, 'add']);
Route::get('/cart', [CartController::class, 'list']);
Route::put('/cart/update/{id}', [CartController::class, 'update']);
Route::delete('/cart/delete/{id}', [CartController::class, 'delete']);
Route::post('/cart/checkout', [CartController::class, 'checkout']);

Route::get('/test-api', function () {
    return response()->json(['message' => 'API working!']);
});