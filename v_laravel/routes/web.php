<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubCategoryFreeController;


use App\Http\Controllers\User\ProductController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/{maincategoryurl}/productos/{productname}.{maincategoryid}.{productid}', [ProductController::class, 'show'])->name('post.showcom');

Route::get('/categoria/{subcategory}', [SubCategoryFreeController::class, 'index'])->name('subcategoryfree');


Route::middleware('auth')->group(function () {

});
