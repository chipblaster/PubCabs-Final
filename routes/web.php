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

Auth::routes();

Route::get('/home', 'WebController@home')->name('home');
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

include __DIR__.'/frontend/web.php';

/**
 *  Admin page routes
 */

Route::group(['middleware' => 'auth','prefix' => 'admin'],function (){
    include __DIR__.'/backend/web.php';
});
