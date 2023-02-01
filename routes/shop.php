<?php

use App\Http\Controllers\shop\ShopController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| shop Routes
|--------------------------------------------------------------------------
|
| Here is where you can register shop routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "shop" middleware group. Now create something great!
|
*/

Route::get('shop',[ShopController::class,'index'])->name('shop');
Route::get('shop-show',[ShopController::class,'show'])->name('show');
Route::post('shop-store',[ShopController::class,'store'])->name('store');
