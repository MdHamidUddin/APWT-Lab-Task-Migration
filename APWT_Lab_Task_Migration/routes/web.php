<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\ProductController;
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


Route::get('/',[ProductController::class,'home'])->name('home');


Route::get('/product/addProduct/',[ProductController::class,'addProduct'])->name('addProduct');

Route::post('/product/addProduct',[ProductController::class,'addProductSubmit'])->name('addProductSubmit');

Route::get('/product/list/',[ProductController::class,'list'])->name('product/List');

Route::get('/product/edit/{id}/{name}/',[ProductController::class,'edit'])->name('product/edit');

Route::post('/product/edit/',[ProductController::class,'editSubmit'])->name('product/edit');

Route::get('/product/delete/{id}/{name}/',[ProductController::class,'delete'])->name('product/delete');


