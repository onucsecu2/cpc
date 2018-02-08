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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'homeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile/{username}', 'ProfileController@profile');
Route::post('/profile', 'ProfileController@update_avatar');

Route::get('/edit/{username}', 'EditProfController@showform');

Route::resource('editprof', 'EditProfController');