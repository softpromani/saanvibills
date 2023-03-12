<?php

use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\RolePermission\PermissionController;
use App\Http\Controllers\RolePermission\RoleController;
use App\Http\Controllers\shop\ShopController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/


Route::get('role',[RoleController::class,'RolePage']);
Route::post('create_role',[RoleController::class,'CreateRole']);
Route::get('permission',[PermissionController::class,'PermissionPage']);
Route::post('create_permission',[PermissionController::class,'storePermission'])->name('permission');
Route::get('assign_permission_view',[PermissionController::class,'assign_permission_view'])->name('assign.permission');
Route::post('assign_permission',[PermissionController::class,'assign_permission'])->name('assign_permission');
Route::get('fetch_permissions',[PermissionController::class,'fetch_permissions'])->name('fetch.permission');

Route::resource('customer', CustomerController::class)->name('customer','');
Route::get('customer_view',[CustomerController::class,'customer_view'])->name('customer.view');
Route::group(['prefix'=>'shop','as'=>'shop.'],function(){
Route::get('/',[ShopController::class,'index']);
Route::get('shop-show',[ShopController::class,'show'])->name('show');
Route::post('shop-store',[ShopController::class,'store'])->name('store');
});
