<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\dashboard\CategoryController;
use App\Http\Controllers\dashboard\PostController;
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
 

Route::get('/', function(){
    return view('/home');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/message' , function(){
    return "Hello, I'm using the laravel Framework version 10";
});

Route::get('/message/{name}' , function($name){
    return "Hello, I'm $name";
});

Route::get('/message-v2/{name?}' , function($name = "Usuario Visitante no identificado"){
    return "Hello, I'm $name";
});

#######################################################################
Route::resource('dashboard/category', 'dashboard\CategoryController');#
Route::resource('/user', 'dashboard\UserController');        #
                                                                      #
// Route::get('/', 'web\WebController@index')->name('index');         #
#######################################################################

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/posts', PostController::class);
Route::resource('/user', UserController::class);
Route::resource('/categories', CategoryController::class)->name('index' , 'showIndex');
Route::resource('/post', PostController::class)->name('index' , 'showIndexPost');








