<?php


Route::get('/','Frontend\IndexController@index')->name('index');
Route::get('/about','Frontend\IndexController@about')->name('about');
Route::get('/contact','Frontend\IndexController@contact')->name('contact');