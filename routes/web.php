<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopkeeperController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('guest.welcome');
});

Route::middleware(['auth', 'verified'])->name('admin.')->prefix('admin')->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('products', ProductController::class)->parameters(['products' => 'product:slug'])->except('show','create','edit');
    Route::resource('types', TypeController::class)->parameters(['types' => 'type:slug'])->except('show','create','edit');
    Route::resource('shopkeepers', ShopkeeperController::class)->parameters(['shopkeepers' => 'shopkeeper:slug'])->except('show','create','edit');
    // Route::resource('orders', OrderController::class)->parameters(['orders' => 'order:slug'])->except('show','create','edit');
});

require __DIR__.'/auth.php';
