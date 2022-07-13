<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});

Route::namespace('Front')->group(function (){
    Route::get('mostafa','UserController@showUser');
});


Route::group(['prefix'=>'users','middleware'=>'auth'],function (){
    Route::get('/',function (){
        return 'work';
    });
});

Route::get('mostafa','Admin\FirstController@mostafa');

Route::resource('customer','CustomerController');

//Route::get('login',function (){
//    return 'plaese Login';
//})->name('login');
                               */


Route::get('/landing', function () {
    return view('landing');
});



Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


