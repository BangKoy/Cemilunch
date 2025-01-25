<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [ProductController::class, 'index'])->middleware('auth')->name('addProduct');
Route::get('/product/{id}', [ProductController::class, 'show'])->middleware('auth')->name('detailProduct');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('authLogin');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('signup');

Route::get('/cart', [CartController::class, 'index'])->middleware('auth')->name('carts');
Route::delete('/cart-delete/{id}', [CartController::class, 'destroy'])->middleware('auth')->name('destroyCart');
Route::post('/cart', [CartController::class, 'create'])->middleware('auth')->name('addCart');
Route::post('/count-cart', [CartController::class, 'getCount'])->middleware('auth')->name('getCount');

Route::get('/checkout', [OrderController::class, 'index'])->middleware('auth')->name('chekout');
Route::post('/checkout', [OrderController::class, 'store'])->middleware('auth')->name('chekoutProduct');

Route::get('/order-list', [OrderController::class, 'history'])->middleware('auth')->name('checkoutHistory');

Route::get('/invoice/{id}', [InvoiceController::class, 'show'])->middleware('auth')->name('invoice');
