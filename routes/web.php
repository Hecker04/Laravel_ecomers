<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\FlashsaleController;

use App\Http\Controllers\Admin\distributorController;

use Illuminate\Support\Facades\Route;

// Guest Route
Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/post-register', [AuthController::class, 'post_register'])->name('post.register');
    Route::post('/post-login', [AuthController::class, 'login'])->name('post.login');

});
// Admin Route
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/product', [ProductController::class, 'index'])->name('admin.product');
    Route::get('/admin-logout', [AuthController::class, 'admin_logout'])->name('admin.logout');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/admin/product/detail/{id}', [ProductController::class, 'detail'])->name('product.detail');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
    // Admin Route flasshele
    // Rute untuk Flash Sale
    Route::get('/admin/flashsale', [FlashsaleController::class, 'index'])->name('admin.flashsale'); // Pastikan ini ada
    Route::get('/flashsale/create', [FlashsaleController::class, 'create'])->name('flashsale.create');
    Route::post('/flashsale/store', [FlashsaleController::class, 'store'])->name('flashsale.store');
    Route::get('/admin/flashsale/detail/{id}', [FlashsaleController::class, 'detail'])->name('flashsale.detail');
    Route::get('/flashsale/edit/{id}', [FlashsaleController::class, 'edit'])->name('flashsale.edit');
    Route::post('/flashsale/update/{id}', [FlashsaleController::class, 'update'])->name('flashsale.update');
    Route::delete('/flashsale/delete/{id}', [FlashsaleController::class, 'delete'])->name('flashsale.delete');
    // Rute untuk distributor
    Route::get('/admin/distributor', [App\Http\Controllers\Admin\DistributorController::class, 'index'])->name('admin.distributor');
    Route::get('/admin/distributor/create', [App\Http\Controllers\Admin\DistributorController::class, 'create'])->name('distributor.create');
    Route::post('/admin/distributor/store', [App\Http\Controllers\Admin\DistributorController::class, 'store'])->name('distributor.store');
    Route::get('/admin/distributor/detail/{id}', [App\Http\Controllers\Admin\DistributorController::class, 'detail'])->name('distributor.detail');
    Route::get('/admin/distributor/edit/{id}', [App\Http\Controllers\Admin\DistributorController::class, 'edit'])->name('distributor.edit');
    Route::put('/admin/distributor/update/{id}', [App\Http\Controllers\Admin\DistributorController::class, 'update'])->name('distributor.update');
    Route::delete('/admin/distributor/delete/{id}', [App\Http\Controllers\Admin\DistributorController::class, 'delete'])->name('distributor.delete');
});
;




// User Route
Route::group(['middleware' => 'auth'], function () {
    Route::get('/user', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/user-logout', [AuthController::class, 'user_logout'])->name('user.logout');

    Route::get('/flashsales', [UserController::class, 'showFlashSales'])->name('flashsales.user');

});

// Product Route
Route::get('/user/product/detail/{id}', [UserController::class, 'detail_product'])->name('user.detail.product');
Route::get('/product/purchase/{productId}/{userId}', [UserController::class, 'purchase']);