<?php
use App\Http\Controllers\Api\LeadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TypeController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ShopkeeperController;

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
Route::get('types', [TypeController::class, 'index']);
Route::get('types/{slug}', [TypeController::class, 'show']);


Route::post('purchase', [OrderController::class, 'purchase']);

Route::get('order', [OrderController::class, 'generate']);
Route::post('order/payment', [OrderController::class, 'makePayment']);

Route::post('/contacts', [LeadController::class, 'store']);

Route::post('checkform', [OrderController::class, 'checkForm']);

