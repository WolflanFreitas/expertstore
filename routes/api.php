<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/**
 * GET /PRODUCTS
 * GET /PRODUCTS/:id
 * POST /PRODUCTS
 * PUT/PATCH /PRODUCTS/:id
 * DELETE /products/:id
 */

Route::get('/hello', fn () => 'Hello Api');
