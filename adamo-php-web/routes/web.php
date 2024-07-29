<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//User
Route::get('/', [UserController::class,'index']);
Route::post("/login",[UserController::class,"login"])->name("login");
Route::get('/showRegister', [UserController::class,'showRegister'])->name('showRegister');
Route::post('/register', [UserController::class,'register'])->name('register');


//Product
Route::get('/products', [ProductController::class,'index'])->name("products");
