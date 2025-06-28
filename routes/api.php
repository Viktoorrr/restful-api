<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GroupController;

/**
 * RESTful API routes for Customer/Group resource.
 * (index, store, show, update, destroy)
 */
Route::apiResource('customers', CustomerController::class);
Route::apiResource('groups', GroupController::class);