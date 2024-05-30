<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('add-product',[ProductController::class,'index'])->name('add.product');
Route::get('manage-product',[ProductController::class,'manage'])->name('manage.product');

Route::post('/store-product',[ProductController::class,'store'])->name('store.product');
Route::get('/edit-product/{id}',[ProductController::class,'edit'])->name('edit.product');
Route::post('/update-product/{id}',[ProductController::class,'update'])->name('update.product');
Route::get('/delete-product/{id}',[ProductController::class,'delete'])->name('delete.product');
