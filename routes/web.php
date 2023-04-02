<?php

use App\Helpers\Helper;
use App\Http\Controllers\Authentication\AuthController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\RolePermission\PermissionController;
use App\Http\Controllers\RolePermission\RoleController;
use App\Models\PermissionName;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

Route::get('login_view',[AuthController::class,'login']);
Route::post('login',[AuthController::class,'store']);
Route::get('logout',function(){
        Auth::guard(Helper::getGuard())->logout();
        return back()->with('toast_success','User logout successfully !');
    });
Route::group(['prefix'=>'auth','as'=>'auth.'],function(){
    Route::get('shop',[AuthController::class,'shop_view'])->name('shop-view');
    Route::post('shop-login',[AuthController::class,'shop_login'])->name('shop-login');
    Route::get('customer',[AuthController::class,'customer_view'])->name('customer-view');
    Route::post('customer-login',[AuthController::class,'customer_login'])->name('customer-login');
    Route::get('admin',[AuthController::class,'admin_view'])->name('admin-view');
    Route::post('admin-login',[AuthController::class,'admin_login'])->name('admin-login');

});
