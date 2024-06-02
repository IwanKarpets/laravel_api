<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\OrderController;

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




Route::get('/stocks', [StockController::class, 'fetchAndStore']);
Route::get('/incomes', [IncomeController::class, 'fetchAndStore']);
Route::get('/sales', [SaleController::class, 'fetchAndStore']);
Route::get('/orders', [OrderController::class, 'fetchAndStore']);
