<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

Route::redirect('/', '/admin');

Auth::routes();

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::resource('products', ProductController::class);
});
