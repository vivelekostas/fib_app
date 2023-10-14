<?php

use App\Http\Controllers\FibonacciSliceController;
use App\Http\Middleware\SliceCheck;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/number_series', FibonacciSliceController::class)->middleware(SliceCheck::class);