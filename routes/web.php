<?php

use App\Http\Controllers\AdminProductController;
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
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminRatingController;

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

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified', 'isAdmin'])->name('dashboard');

//Get product by type_ID
Route::get('/shop-grid/{typeid?}', [ProductController::class, 'drid']);

//Get Detail product
Route::get('/shop-details/{id}', [ProductDetailsController::class, 'product_detail'])->name('shop.details');

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

//Transaction history
Route::get('transaction-history', [ProductController::class, 'transactionHistory'])->name('transactionHistory');
Route::get('transaction-detail/{id}', [ProductController::class, 'transactionDetail'])->name('transactionDetail');

//View account
Route::get('view-account', [PageController::class, 'view_account'])->name('view-account');
Route::get('setting-profile', [PageController::class, 'update_profile'])->name('update-profile');

//user update account
Route::put('/setting-profile/{id}', [PageController::class, 'update'])->name('update.user_profile');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/change-password', [App\Http\Controllers\ChangePasswordController::class, 'showChangePasswordGet'])->name('changePasswordGet');
    Route::post('/change-password', [App\Http\Controllers\ChangePasswordController::class, 'changePasswordPost'])->name('changePasswordPost');
});

//Rating
Route::post('add-rating', [ProductDetailsController::class, 'addRating']);

Route::post('/send',[SendEmailController::class,'send'])->name('send.email');

Route::post('/receive-email',[SendEmailController::class,'receiveEmail'])->name('receiveEmail.email');

//Admin Page
Route::group(['middleware'=>['isAdmin']], function(){
    //get list protype
    Route::get('/dashboard/protype', [AdminProtype::class, 'protype'])->name('admin.listprotype');

    //add protype
    Route::post('/dashboard/protype/add', [AdminProtype::class, 'add'])->name('admin.addprotype');

    //get from add protype
    Route::get('/dashboard/protype/addprotype', function () {
        return view('admin-addprotype');
    })->name('protype.add');

    //get from edit protype
    Route::get('/dashboard/protype/edit/{id}', [AdminProtype::class, 'edit'])->name('admin.editprotype');

    //update protype
    Route::put('/dashboard/protype/update/{id}', [AdminProtype::class, 'update'])->name('admin.update');

    //Delete protype
    Route::delete('/dashboard/protype/{protype}', [AdminProtype::class, 'destroy'])->name('admin.protype');

    //get from list user
    Route::get('/dashboard/user', [AdminUser::class, 'user'])->name('admin.listuser');

    //Delete user
    Route::delete('/dashboard/user/{user}', [AdminUser::class, 'destroy'])->name('admin.user');

    //add user
    Route::post('/dashboard/user/add', [AdminUser::class, 'add'])->name('admin.adduser');

    //get from add user
    Route::get('/dashboard/user/adduser', function () {
        return view('admin-addUser');
    })->name('user.add');

    //get from edit user
    Route::get('/dashboard/user/edit/{id}', [AdminUser::class, 'edit'])->name('admin.edituser');

    //update user
    Route::put('/dashboard/protype/update', [AdminUser::class, 'update'])->name('admin.updateuser');

    //get from list product
    Route::get('/dashboard/product', [AdminProductController::class,'product'])->name('admin.listproduct');

    //get from add product
    Route::get('/dashboard/product/add', [AdminProductController::class,'add'])->name('admin.addproduct');

    // add product
    Route::post('/dashboard/product/add', [AdminProductController::class,'addproduct'])->name('product.add');

    //get from edit product
    Route::get('/dashboard/product/edit/{id}',[AdminProductController::class,'edit'])->name('admin.editproduct');

    //get update product
    Route::put('/dashboard/product/edit',[AdminProductController::class,'update'])->name('product.update');

    //Delete user
    Route::delete('/dashboard/product/{product}', [AdminProductController::class,'destroy'])->name('delete.product');

    //get list email newsletter 
    Route::get('/dashboard/email-newsletter', [EmailController::class, 'getAllEmails'])->name('admin.email-letter');

    //Delete email newsletter
    Route::delete('/dashboard/email-newsletter/{email}', [EmailController::class,'destroy'])->name('admin.delete-email-letter');

    //View form send all email
    Route::get('/dashboard/email-newsletter/send-all-email', function () {
        return view('admin-send-all-mails');
    })->name('form-send-all-emails');

    //Send all emails
    Route::post('/dashboard/sendAllMails',[SendEmailController::class,'send_all'])->name('admin-send-all-email');

    //View form send 1 email
    Route::get('/dashboard/email-newsletter/send-email/{email}', [EmailController::class,'find'])->name('form-send-emails');

    //Send 1 email
    Route::post('/dashboard/sendMail',[SendEmailController::class,'send'])->name('admin-send-email');

    //View all orders of Admin
    Route::get('/dashboard/orders', [OrdersController::class, 'index'])->name('admin-view-orders');

    //View details orders of admin
    Route::get('/dashboard/orders/{id}', [OrdersController::class, 'find'])->name('admin-view-details-order');

    //View rating of admin
    Route::get('/dashboard/rating', [AdminRatingController::class, 'index'])->name('admin-view-rating');

    //Delete rating
    Route::delete('/dashboard/rating/delete/{id}',[AdminRatingController::class,'destroy'])->name('admin-delete-rating');

    //View new order
    Route::get('/dashboard/new-orders', [DashboardController::class, 'newOder'])->name('admin-view-new-order');
});