<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubCategoryFreeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


use App\Http\Controllers\User\ProductController;
use App\Http\Controllers\User\UserController;

use App\Http\Controllers\Admin\UserController as AdminController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/{maincategoryurl}/productos/{productname}.{maincategoryid}.{productid}', [ProductController::class, 'show'])->name('post.showcom');

Route::get('/categoria/{subcategory}', [SubCategoryFreeController::class, 'index'])->name('subcategoryfree');

Route::get('login', [AuthenticatedSessionController::class, 'create'])
->name('login');

Route::post('login', [AuthenticatedSessionController::class, 'store']);

Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
->name('logout');


Route::middleware('auth')->group(function () {

    Route::get('/settings', [UserController::class, 'index'])->name('settings');

    Route::get('/admin/products', [AdminController::class, 'productcreate'])->name('admin.productcreate');

    Route::get('/product/{subcategory}/{id}/post-thread', [ProductController::class, 'index'])->name('product');

    Route::post('product/post', [ProductController::class, 'store'])->name('product.store');

});
