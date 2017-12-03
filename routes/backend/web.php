<?php

Route::get('/dashboard','Backend\AdminController@index')->name('admin');
Route::resource('/contact','Backend\ContactController',['only' => ['index','edit','update']]);
Route::resource('/about','Backend\AboutController',['only' => ['index','edit','update']]);
Route::resource('/social','Backend\SocialController');
Route::resource('/sub-about','Backend\SubAboutController');
Route::resource('/subscribe','Backend\SubscribeController');
Route::resource('/driver','Backend\DriverController');
Route::resource('/rider','Backend\RiderController');