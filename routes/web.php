<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SellerController;

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

Route::get('/seller/login', [SellerController::class,'index'])->name('seller-index');
Route::post('/seller/login', [SellerController::class,'login'])->name('seller-login');
Route::get('/seller/dashboard', [SellerController::class,'dashboard'])->name('seller-dashboard');
Route::get('/seller/dashboard/createproduct', [SellerController::class,'createProduct'])->name('seller-createproduct');
Route::post('/seller/dashboard/create', [SellerController::class,'createproductPost'])->name('seller-createproductPost');
Route::get('/seller/create', [SellerController::class,'create'])->name('seller-create');
Route::post('/seller', [SellerController::class,'store'])->name('seller-store');

