<?php

use Illuminate\Support\Facades\Artisan;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);
Route::post('/user/register','Front\UserController@register')->name('user.custom.register');

//Route::get('/locale/{lang}','Front\FrontController@setLocal')->name('change.locale');
Route::get('/home', 'HomeController@index')->name('home');
Route::namespace('Front')->group(function(){
    Route::get('/','FrontController@index')->name('front.index');
    Route::prefix('register')->group(function (){
        Route::post('/first-step','FrontController@firstStep')->name('register.firstStep');
        Route::get('/second-step','FrontController@secondGetStep')->name('register.get.secondStep');
        Route::post('/second-step','FrontController@secondStep')->name('register.secondStep');
        Route::get('/third-step','FrontController@thirdGetStep')->name('register.get.thirdStep');
        Route::post('/third-step','FrontController@thirdStep')->name('register.thirdStep');
        Route::get('/four-step','FrontController@fourStep')->name('register.fourStep');
    });
});
Route::namespace('Admin')->middleware(['auth','is_admin'])->prefix('admin')->group(function(){
    Route::get('/','AdminController@index')->name('dashboard');
    Route::get('/main/news','AdminController@mainNews')->name('admin.main.news');
    Route::put('/main/news/{id}/update','AdminController@mainNewsUpdate')->name('admin.main.news.update');
    Route::get('/first/step','AdminController@firstStep')->name('admin.first.step');
    Route::put('/first/step/{id}/update','AdminController@firstStepUpdate')->name('firstStep.update');
    Route::get('/hwo/we','AdminController@hwoWeAre')->name('admin.hwo.we.are');


    Route::put('/hwo/we/{id}/update','AdminController@hwoWeAreUpdate')->name('hwoWeAre.update');

    Route::get('/slider/text','AdminController@sliderText')->name('admin.slider.text');
    Route::put('/slider/text/{id}/update','AdminController@sliderTextUpdate')->name('slider.text.update');
    Route::get('/comment/header','AdminController@clientCommentHeader')->name('admin.client.comment.header');
    Route::put('/comment/header/{id}/update','AdminController@clientCommentHeaderUpdate')->name('client.comment.header.update');
    Route::get('/trainer/header','AdminController@trainerHeader')->name('admin.trainer.header');
    Route::put('/trainer/header/{id}/update','AdminController@trainerHeaderUpdate')->name('admin.trainer.header.update');
    Route::namespace('Slider')->group(function (){
        Route::get('/slider','SliderController@index')->name('slider.index');
        Route::get('/slider/create','SliderController@create')->name('slider.create');
        Route::post('/slider/store','SliderController@store')->name('slider.store');
        Route::get('/slider/{id}/edit','SliderController@edit')->name('slider.edit');
        Route::Put('/slider/{id}/update','SliderController@update')->name('slider.update');
        Route::Delete('/slider/{id}','SliderController@destroy')->name('slider.destroy');
    });
    Route::namespace('Comment')->group(function (){
        Route::resource('comment','CommentController');
    });
    Route::namespace('ClientComment')->group(function (){
        Route::resource('clientComment','ClientCommentController');
    });
    Route::namespace('DietRestriction')->group(function (){
        Route::resource('dietRestriction','DietRestrictionController');
    });
    Route::namespace('Dish')->group(function (){
        Route::resource('dish','DishController');
    });
    Route::namespace('News')->group(function (){
        Route::resource('news','NewsController');
    });
    Route::namespace('Program')->group(function (){
        Route::resource('program','ProgramController');
    });
    Route::namespace('ProgramCategory')->group(function (){
        Route::resource('programCategory','ProgramCategoryController');
    });
    Route::namespace('PurposeOfNutrition')->group(function (){
        Route::resource('purposeOfNutrition','PurposeOfNutritionController');
    });
    Route::namespace('Subscription')->group(function (){
        Route::resource('subscription','SubscriptionController');
    });
    Route::namespace('SubTask')->group(function (){
        Route::resource('subTask','SubTaskController');
    });
    Route::namespace('Task')->group(function (){
        Route::resource('task','TaskController');
    });
    Route::namespace('Trainer')->group(function (){
        Route::resource('trainer','TrainerController');
    });
    Route::namespace('Video')->group(function (){
        Route::resource('video','VideoController');
    });
    Route::namespace('WorkOut')->group(function (){
        Route::resource('workOut','WorkOutController');
    });
    Route::namespace('FoodCategory')->group(function (){
        Route::resource('foodCategory','FoodCategoryController');
    });
});
Route::prefix('profile')->namespace('Profile')->middleware('auth')->group(function (){
    Route::get('/','ProfileController@index')->name('profile.index');
    Route::get('/information','ProfileController@information')->name('profile.information');
    Route::get('/food','ProfileController@food')->name('profile.food');
    Route::get('/achievements','ProfileController@achievements')->name('profile.achievements');
    Route::get('/burn-fat','ProfileController@burnFat')->name('profile.burnFat');
    Route::get('/subscribe','ProfileController@subscribe')->name('profile.subscribe');
    Route::get('/functional','ProfileController@functional')->name('profile.functional');
    Route::get('/get/personals','ProfileController@getPersonals');

//    postRoutes

    Route::post('/user/change/avatar','ProfileController@changeUserPhoto');
    Route::post('/user/change/name','ProfileController@changeUserName');
    Route::post('/user/change/gender','ProfileController@changeUserGender');
    Route::post('/user/change/personals','ProfileController@changeUserPersonals')->name('user.change.personals');
});
