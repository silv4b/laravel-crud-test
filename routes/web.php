<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    // return view('welcome');
    return redirect('/products');
});

Route::resource('products', ProductController::class);

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
