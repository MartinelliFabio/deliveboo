<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route; 

use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ShopkeeperController;
use App\Http\Controllers\Admin\TypeController;


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
    if(Auth::check()) {
        return redirect('/admin');
    } else {
        return view('auth.login');
    }
});

Route::middleware(['auth', 'verified'])->name('admin.')->prefix('admin')->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Rotta per il soft-delete di Products 
    Route::get('products/archive', [ProductController::class, 'archive'])->name('products.archive');
    Route::delete('products/archive/{id}/restore', [ProductController::class, 'trashedRestored'])->name('products.archive.restore');
    // Route::delete('products/archive/{id}/force_delete', [ProductController::class, 'trashedDelete'])->name('products.archive.destroy');

    // Rotta per il soft-delete di Orders 
    Route::get('orders/archive', [OrderController::class, 'archive'])->name('orders.archive');
    Route::delete('orders/archive/{id}/restore', [OrderController::class, 'trashedRestored'])->name('orders.archive.restore');
    // Route::delete('orders/archive/{id}/force_delete', [OrderController::class, 'trashedDelete'])->name('orders.archive.destroy');



    Route::resource('products', ProductController::class)->parameters(['products' => 'product:slug']);
    Route::resource('types', TypeController::class)->parameters(['types' => 'type:slug'])->except('show','create','edit');
    Route::resource('shopkeepers', ShopkeeperController::class)->parameters(['shopkeepers' => 'shopkeeper:slug']);
    Route::resource('orders', OrderController::class)->parameters(['orders' => 'order:slug'])->except('show','create','edit');
});

require __DIR__.'/auth.php';
