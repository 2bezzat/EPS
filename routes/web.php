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
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/',function(){
	return view('home');
});

Route::get('/add_user_to_account','userController@addUserToAccount');
Route::post('/add_user_to_account','userController@storeUserToAccount');
Route::resource('/users','userController');
Route::resource('/accounts','accountController');
