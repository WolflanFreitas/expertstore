<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/**
 * GET /products
 * GET /products/:id
 * POST /products
 * PUT/PATCH /products/:id
 * DELETE /products/:id
 */

Route::controller(\App\Http\Controllers\Api\ProductController::class)->group(function () {
    Route::get('/products', 'index');
    Route::get('/products/{product}', 'show');
    Route::post('/products', 'store');
    Route::match(['put', 'patch'], '/products/{product}', 'update');
    Route::delete('/products/{product}', 'destroy');
});
