<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::resource('post', 'api\PostController@category')->only(
    ['index', 'show']
);

Route::get('post/{category}/category', 'api\PostController@category');
Route::get('/category', 'api\CategoryController@index');
Route::get('/category/all', 'api\CategoryController@all');

Route::get('/post/{url_clean}/url_clean', 'api\PostController@url_clean');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
