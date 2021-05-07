<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::namespace('Front')->group(function(){
    Route::get('/','FrontController@index')->name('front.index');
    Route::prefix('login')->group(function (){
        Route::get('/second-step','FrontController@secondStep')->name('login.secondStep');
        Route::get('/third-step','FrontController@thirdStep')->name('login.thirdStep');
        Route::get('/four-step','FrontController@fourStep')->name('login.fourStep');

    });
});
