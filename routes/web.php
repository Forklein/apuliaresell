<?php

use Illuminate\Support\Facades\Auth;
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

// Auth::routes(['register' => false]);


Route::get('/', function () {
    return view('guest.welcome');
});

Route::prefix('admin')->group(function () {
    Auth::routes(['register' => false]);
});

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/images', 'ImageController');
    Route::resource('/messages', 'MessageController');
    Route::resource('/categories', 'CategoryController');
});
