<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductAPIController;
use App\Http\Controllers\API\CartAPIController;

Route::get('/products', [ProductAPIController::class, 'index']);

Route::prefix('cart')->controller(CartAPIController::class)->group(function () {
    Route::get('/', 'list');
    Route::post('/add', 'add');
    Route::put('/update/{id}', 'update');
    Route::delete('/delete/{id}', 'delete');
    Route::post('/checkout', 'checkout');
});

Route::get('/test-api', fn () => response()->json(['message' => 'API working!']));
