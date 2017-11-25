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
    return view('frontend.index');
});

Auth::routes();

Route::get('/home', 'WebController@index')->name('home');
Route::post('/login','WebController@error');
Route::get('/login','WebController@error')->name('login');
Route::get('/register','WebController@error');
Route::get('/password/reset','Auth\ForgotPasswordController@showLinkRequestForm')->middleware('auth');

/**
 *   Custom  routes for admin
 */
Route::get('/secret/pubcabs','WebController@admin_login');
Route::post('/secret/pubcabs/','WebController@post_admin')->name('post_admin');

/**
 *  Site Page Routes
 */
Route::get('/','Frontend\IndexController@index')->name('index');
Route::get('/about','Frontend\IndexController@about')->name('about');
Route::get('/contact','Frontend\IndexController@contact')->name('contact');

/**
 *  Admin page routes
 */
Route::get('/dasboard','Backend\AdminController@index')->name('admin');
