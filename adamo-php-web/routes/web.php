<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Main Page
Route::get('/', [HomeController::class,'index'])->name('main_page');
//User
Route::get("/login",[UserController::class,"index"])->name("login_get");
Route::post("/login",[UserController::class,"login"])->name("login_post");
Route::get('/register', [UserController::class,'showRegister'])->name('register_get');
Route::post('/register', [UserController::class,'register'])->name('register_post');


//Product
Route::get('/products', [ProductController::class,'index'])->name("products");


//Categories
Route::get('/categories',[CategoryController::class,'getParentCategories'])->name('categories');
