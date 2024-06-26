<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Resource\View\AdminDashboard;
use Illuminate\Resource\View\UserDashboard;

Route::get('/', [CategoryController::class, 'index'])->name('home');
Route::get('/product/{catid?}', [ProductController::class, 'index'])->name('products.index');
Route::match(['get', 'post'], '/cart/add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('products.addToCart');
Route::get('/category', [CategoryController::class, 'index']);
// Route::get('/cart', function () {
//     return view('page.cart');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Route::middleware(['auth'])->group(function(){
//     Route::get('/user/dashboard',UserDashboard::class)->name('user.dashboard');
// });

// Route::middleware(['auth','authadmin'])->group(function(){
//     Route::get('/admin/dashboard',AdminDashboard::class)->name('admin.dashboard');
// });


require __DIR__.'/auth.php';
