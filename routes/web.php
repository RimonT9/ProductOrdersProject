<?php

use App\Http\Controllers\Order\CreateController as OrderCreateController;
use App\Http\Controllers\Order\IndexController as OrderIndexController;
use App\Http\Controllers\Order\ShowController as OrderShowController;
use App\Http\Controllers\Order\StoreController as OrderStoreController;
use App\Http\Controllers\Order\UpdateController as OrderUpdateController;
use App\Http\Controllers\Product\CreateController;
use App\Http\Controllers\Product\DestroyController;
use App\Http\Controllers\Product\EditController;
use App\Http\Controllers\Product\IndexController;
use App\Http\Controllers\Product\ShowController;
use App\Http\Controllers\Product\StoreController;
use App\Http\Controllers\Product\UpdateController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\Product', 'prefix' => 'products'], function(){
    Route::get('/', IndexController::class)->name('product.index');
    Route::get('/create', CreateController::class)->name('product.create');
    Route::post('/', StoreController::class)->name('product.store');
    Route::get('/{product}', ShowController::class)->name('product.show');
    Route::get('/{product}/edit', EditController::class)->name('product.edit');
    Route::patch('/{product}', UpdateController::class)->name('product.update');
    Route::delete('/{product}', DestroyController::class)->name('product.destroy');
});

Route::group(['namespace' => 'App\Http\Controllers\Order', 'prefix' => 'orders'], function(){
    Route::get('/', OrderIndexController::class)->name('order.index');
    Route::get('/create', OrderCreateController::class)->name('order.create');
    Route::post('/', OrderStoreController::class)->name('order.store');
    Route::get('/{order}', OrderShowController::class)->name('order.show');
    Route::put('/{order}', OrderUpdateController::class)->name('order.update');
});
