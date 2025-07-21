<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\OrderController;

Route::redirect('/', '/admin');

Auth::routes();

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::resource('products', ProductController::class);
    
    Route::get('cart', [CartController::class, 'index'])->name('admin.cart.index');
    Route::get('orders', [OrderController::class, 'index'])->name('admin.orders.index');
    Route::get('orders/{id}', [OrderController::class, 'show'])->name('admin.orders.show');
});
