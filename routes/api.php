<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GroupController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// RESTful routes (index, store, show, update, destroy)
Route::apiResource('customers', CustomerController::class);
Route::apiResource('groups', GroupController::class);