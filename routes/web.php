<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::prefix("admin")->group(function(){
    route::get("/",[AdminController::class,"index"])->name('admin.index');
    route::get("products/",[AdminController::class,"product"])->name('admin.product');
    route::match(['get','post'],"products/add",[AdminController::class,"insertProduct"])->name('admin.product.insert');
    route::get("categories/",[AdminController::class,"category"])->name("admin.categories");
    route::match(['get','post'],"categories/add",[AdminController::class,"insertCategory"])->name('admin.category.insert');
    route::match(['get','post'],"coupons/",[AdminController::class,"coupon"])->name('admin.coupon');
    route::get("address/",[AdminController::class,"address"])->name('admin.address');
    route::get("orders/",[AdminController::class,"orders"])->name('admin.orders');
    route::get("users/",[AdminController::class,"users"])->name('admin.users');

    //delete
    route::delete("/delete/(id)",[AdminController::class,"deleteProduct"])->name('admin.product.delete');

});
