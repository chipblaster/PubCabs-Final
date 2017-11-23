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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/login','HomeController@error');
Route::get('/login','HomeController@error')->name('login');
Route::get('/register','HomeController@error');
Route::get('/password/reset','Auth\ForgotPasswordController@showLinkRequestForm')->middleware('auth');

/**
 *   Custom  routes for admin
 */
Route::get('/secret/pubcabs','HomeController@admin_login');
Route::post('/secret/pubcabs/','HomeController@post_admin_login')->name('admin_login');

