<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoadmoreController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
<<<<<<< Updated upstream
=======
use App\Http\Controllers\ProductDetailsController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminProtype;


>>>>>>> Stashed changes

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

Route::get('/', [ProductController::class, 'index']);

Route::get('/shop-details/{id}', [ProductController::class, 'product_detail']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

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

//Get product by type_ID
Route::get('/shop-grid/{typeid?}', [ProductController::class, 'drid']);

//Get Detail product
Route::get('/shop-details/{id}', [ProductController::class, 'product_detail']);

// Search
Route::get('search', [ProductController::class, 'getSearch'])->name('search');

// Log out
Route::get('logout', [ProductController::class, 'logout'])->name('logout');
Route::get('logout', function () {
    auth()->logout();
    Session()->flush();

    return redirect('/');
})->name('logout');
require __DIR__ . '/auth.php';
