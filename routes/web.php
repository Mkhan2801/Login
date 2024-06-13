<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [UserController::class,'Index']);

Route::post('/singUp', [UserController::class,"singUP"]);
Route::post('/singIn', [UserController::class,"singIn"]);
Route::post('/singOut', [UserController::class,"singOut"]);

Route::get('/profileUpdate', [UserController::class,"profileUpdate"]);
Route::post('/post', [UserController::class,"post"]);
Route::delete('/deletePost', [UserController::class,"deletePost"]);
Route::put('/updatePost', [UserController::class,"updatePost"]);

Route::post('/updateAvatar', [UserController::class,"updateAvatar"]);
Route::get('/avatar', [UserController::class,"avatar"]);
