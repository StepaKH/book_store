<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/search', 'App\Http\Controllers\ProductController@search')->name('search');
Route::get('/makeOrder/{product}', 'App\Http\Controllers\OrderController@makeOrder')->name('makeOrder');
Route::post('/storeOrder/{product}', 'App\Http\Controllers\OrderController@storeOrder')->name('storeOrder');

Route::resource('/products', ProductController::class);

Route::resource('/orders', OrderController::class)
    ->middleware('auth');

Route::resource('/users', UserController::class)
    ->middleware('auth');

Route::resource('/categories', CategoryController::class)
    ->middleware('auth');

Auth::routes();
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');
