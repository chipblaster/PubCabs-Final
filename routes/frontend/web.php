<?php


Route::get('/','Frontend\IndexController@index')->name('index');
Route::get('/about','Frontend\IndexController@about')->name('about');
Route::get('/contact','Frontend\IndexController@contact')->name('contact');
Route::get('/drivers','Frontend\IndexController@drivers')->name('drivers');
Route::get('/riders','Frontend\IndexController@riders')->name('riders');