<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Resource\View\AdminDashboard;
use Illuminate\Resource\View\UserDashboard;

Route::get('/', [CategoryController::class, 'index'])->name('home');
Route::get('/product/{catid?}', [ProductController::class, 'index'])->name('products.index');
Route::post('/addcart/{id}', [CartController::class, 'addcart'])->name('products.addToCart');
Route::get('/category', [CategoryController::class, 'show']);
Route::get('/cart', [CartController::class, 'cart']);
Route::get('/delete/{id}', [CartController::class, 'deletecart']);
Route::get('/checkout', function () {
    return view('page.checkout');
});










Route::get('order',[CartController::class,'order']);
Route::post('orderplace',[CartController::class,'orderPlace']);






require __DIR__.'/auth.php';
