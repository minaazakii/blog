<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;

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
Route::get('/home',function(){
    return view('home');
})->name('home');

                //-------DashBoard------------//
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

                //-----------Login-----------//
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);

                //---------------Logout-----------//
Route::post('/logout',[LogoutController::class,'store'])->name('logout');


                //-------------Register-----------------//
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

                //------------Posts-------------------//
Route::get('/post',[PostController::class,'index'])->name('post');
Route::post('/post',[PostController::class,'store']);
Route::delete('/post/{post}/delete',[PostController::class,'delete'])->name('delete');
Route::get('/post/{post}',[PostController::class,'show'])->name('showPost');


                //------------Likes-----------------//
Route::post('/posts/{post}/like',[PostLikeController::class,'like'])->name('like');
Route::delete('/posts/{post}/unlike',[PostLikeController::class,'unLike'])->name('unLike');


                //------------Profile--------------//
Route::get('/users/profile/{user:username}',[ProfileController::class,'index'])->name('profile');

