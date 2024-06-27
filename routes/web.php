<?php

use App\Http\Controllers\Home\DashBoardController;
use App\Http\Controllers\Information\InformationController;
use App\Http\Controllers\Products\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::prefix('')->group(function (){
    Route::get('/', [DashBoardController::class, 'index']);
});

Route::get('thong-tin-sv', [InformationController::class, 'index']);


Route::prefix('product')->group(function (){
    Route::get('/', [ProductController::class, 'index']);
    Route::get('list-products', [ProductController::class, 'listProduct']);
    Route::get('get-product/{id}', [ProductController::class, 'getProduct']);
    Route::get('update-product/{id}', [ProductController::class, 'formUpdate']);
});
