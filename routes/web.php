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
    Route::prefix('register')->group(function (){
        Route::get('/second-step','FrontController@secondStep')->name('register.secondStep');
        Route::get('/third-step','FrontController@thirdStep')->name('register.thirdStep');
        Route::get('/four-step','FrontController@fourStep')->name('register.fourStep');

    });
});
Route::namespace('Admin')->middleware('auth')->prefix('admin')->group(function(){
    Route::get('/','AdminController@index')->name('dashboard');
    Route::namespace('Slider')->group(function (){
        Route::get('/slider','SliderController@index')->name('slider.index');
        Route::get('/slider/create','SliderController@create')->name('slider.create');
        Route::post('/slider/store','SliderController@store')->name('slider.store');
        Route::get('/slider/{id}/edit','SliderController@edit')->name('slider.edit');
        Route::Put('/slider/{id}/update','SliderController@update')->name('slider.update');
        Route::Delete('/slider/{id}','SliderController@destroy')->name('slider.destroy');
    });
});
