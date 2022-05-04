<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoadmoreController;
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

Route::get('/', [ProductController::class,'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
//Get product by type_ID
Route::get('/shop-grid/{typeid?}', [ProductController::class,'drid']);
// Route::post('/loadmore/load_data', [LoadmoreController::class,'load_data'])->name('loadmore.load_data');
require __DIR__.'/auth.php';
