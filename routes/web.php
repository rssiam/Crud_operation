<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\frontController;
use App\Http\Controllers\AuthController;

Route::get('/',[CrudController::class,'index'])->name('index');
Route::get('/show-data',[CrudController::class,'showData'])->name('show-data');
Route::get('/add-data',[CrudController::class,'addData'])->name('add-data');
Route::post('/store-data',[CrudController::class,'storeData'])->name('store-data');
Route::get('/edit-data/{id}',[CrudController::class,'editData'])->name('edit-data');
Route::post('/update-data/{id}',[CrudController::class,'updateData'])->name('update-data');
Route::get('/delete-data/{id}',[CrudController::class,'deleteData'])->name('delete-data');

Route::resource('photos', PhotoController::class);

Route::get('/signup',[frontController::class,'signUp'])->name('signUp');
Route::post('/signup',[frontController::class,'processSignup']);

Route::get('/login',[AuthController::class,'showLoginForm'])->name('login');
Route::post('/login',[AuthController::class,'processLoginForm'])->name('processlogin');

Route::get('/register',[AuthController::class,'showRegisterForm'])->name('register');
Route::post('/register',[AuthController::class,'processRegisterForm']);

