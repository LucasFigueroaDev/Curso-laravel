<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('products', ProductController::class);
