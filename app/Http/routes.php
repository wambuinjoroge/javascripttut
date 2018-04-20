<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', function () {
    return view('landing.index');
});
Route::auth(); 
Route::get('loadingJS','HomeController@js');


Route::get('firstJs', function () {
    return view('jsexam.index');
});

Route::get('ajaxExample', function () {
    return view('ajax.message');
});

Route::get('/hospital', function () {
    return view('countyHospital.index');
});

Route::get('select', function () {
    return view('first.select');
});

Route::get('index','FirstController@index');
Route::get('fella','FirstController@fella');


//the second controller
Route::get('index','SecondController@index');
Route::get('second','SecondController@select');
Route::get('side','SecondController@side');
Route::get('nav','SecondController@nav');


Route::get('/home', 'HomeController@index');
