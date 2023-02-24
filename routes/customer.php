<?php

use App\Http\Controllers\customer\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;

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
Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
