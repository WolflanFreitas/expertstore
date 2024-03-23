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

Route::get('/products', [\App\Http\Controllers\Api\ProductController::class, 'index']);
Route::get('/products/{product}', [\App\Http\Controllers\Api\ProductController::class, 'show']);
Route::post('/products', [\App\Http\Controllers\Api\ProductController::class, 'store']);
Route::match(['put', 'patch'], '/products/{product}', [\App\Http\Controllers\Api\ProductController::class, 'update']);
Route::delete('/products/{product}', [\App\Http\Controllers\Api\ProductController::class, 'destroy']);
