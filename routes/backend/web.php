<?php

Route::get('/dasboard','Backend\AdminController@index')->name('admin');
Route::resource('/contact','Backend\ContactController',['only' => ['index','edit','update']]);
Route::resource('/about','Backend\AboutController',['only' => ['index','edit','update']]);
Route::resource('/social','Backend\SocialController');
Route::resource('/sub-about','Backend\SubAboutController');