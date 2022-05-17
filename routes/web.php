<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoadmoreController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [ProductController::class, 'index'])->name('index');

Route::get('/shop-details/{id}', [ProductController::class, 'product_detail']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Get product by type_ID
Route::get('/shop-grid/{typeid?}', [ProductController::class, 'drid']);

//Get Detail product
Route::get('/shop-details/{id}', [ProductController::class, 'product_detail']);

// Search
Route::get('search', [ProductController::class, 'getSearch'])->name('search');

// Log out
Route::get('logout', function () {
    auth()->logout();
    Session()->flush();

    return redirect('/');
})->name('logout');
require __DIR__ . '/auth.php';

//Contact
Route::get('/contact', [PageController::class, 'contact']);

//About us
Route::get('/about-us', [PageController::class, 'about_us']);

// Them san pham vao gio hang
Route::get('add-to-cart/{id}', [ProductController::class, 'getAddToCart'])->name('product.addToCart');
Route::get('shopping-cart', [ProductController::class, 'getCart'])->name('shoppingCart');

// Xoa san pham ra gio hang
Route::get('delete-to-cart/{id}', [ProductController::class, 'deleteItemCart']);
