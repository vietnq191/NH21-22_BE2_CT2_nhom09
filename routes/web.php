<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoadmoreController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductDetailsController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminProtype;
use App\Http\Controllers\AdminUser;

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

})->middleware(['auth','verified','isAdmin'])->name('dashboard');

//get list protype
Route::get('/dashboard/protype', [AdminProtype::class,'protype'])->name('admin.listprotype');

//add protype
Route::post('/dashboard/protype/add', [AdminProtype::class,'add'])->name('admin.addprotype');;

//get from add protype
Route::get('/dashboard/protype/addprotype',function () {
    return view('admin-addprotype');
})->name('protype.add');

//get from edit protype
Route::get('/dashboard/protype/edit/{id}',[AdminProtype::class,'edit'])->name('admin.editprotype');

//update protype
Route::put('/dashboard/protype/update/{id}',[AdminProtype::class,'update'])->name('admin.update');

//Delete protype
Route::delete('/dashboard/protype/{protype}', [AdminProtype::class,'destroy'])->name('admin.protype');

//get from list user
Route::get('/dashboard/user', [AdminUser::class,'user'])->name('admin.listuser');

//Delete user
Route::delete('/dashboard/user/{user}', [AdminUser::class,'destroy'])->name('admin.user');

//add user
Route::post('/dashboard/user/add', [AdminUser::class,'add'])->name('admin.adduser');

//get from add user
Route::get('/dashboard/user/adduser',function () {
    return view('admin-addUser');
})->name('user.add');

//get from edit user
Route::get('/dashboard/user/edit/{id}',[AdminUser::class,'edit'])->name('admin.edituser');

//update user
Route::put('/dashboard/protype/update',[AdminUser::class,'update'])->name('admin.updateuser');

//Get product by type_ID
Route::get('/shop-grid/{typeid?}', [ProductController::class, 'drid']);

//Get Detail product
Route::get('/shop-details/{id}', [ProductDetailsController::class, 'product_detail']);

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

//Verify Email
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


//Cap nhat tat ca san pham
Route::post('save-all', [ProductController::class, 'saveAllItemCart']);

//Checkout
Route::get('checkout', [ProductController::class, 'checkOut'])->name('checkOut');
Route::post('save-checkout', [ProductController::class, 'saveCheckOut'])->name('saveCheckOut');
