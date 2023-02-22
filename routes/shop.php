<?php

use App\Http\Controllers\shop\ShopController;
use App\Http\Controllers\shop\ShopDetailsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

Route::post('vendore-details',[ShopDetailsController::class,'store'])->name('vendore_details');
Route::post('vendore-info',[ShopDetailsController::class,'vendoreinfo'])->name('vendore_info');
Route::post('vendore-company-details',[ShopDetailsController::class,'vendorecompany'])->name('vendore_company');
Route::post('vendore-bank-details',[ShopDetailsController::class,'vendorebank'])->name('vendore_bank');
Route::get('vendore-state/{id}',[ShopDetailsController::class,'vendorestate'])->name('vendore_state');
Route::get('vendore-city/{id}',[ShopDetailsController::class,'vendorecity'])->name('vendore_city');
Route::get('dashboard',[ShopDetailsController::class,'dashboard'])->name('dashboard');
