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
    return view('welcome');
});

Route::get('/ehsan',function(){
	return view('ehsan');
});

Route::get('/test',function(){
	return view('test');
});

Route::get('/main',function(){
	return view('main');
});

Route::get('/pagination',function(){
	return view('sample/pagination2');
});

Route::get('product',function(){
	return view('product');
});