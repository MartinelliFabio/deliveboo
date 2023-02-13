<?php

use App\Http\Controllers\Api\Orders\OrderController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ShopkeeperController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('products', [ProductController::class, 'index']);
Route::get('products/{slug}', [ProductController::class, 'show']);
Route::get('shopkeepers', [ShopkeeperController::class, 'index']);
Route::get('shopkeepers/{slug}', [ShopkeeperController::class, 'show']);

Route::get('orders/generate', [OrderController::class, 'generate']);
Route::post('orders/make/payment', [OrderController::class, 'makePayment']);

