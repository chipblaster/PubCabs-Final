<?php


Route::get('/','Frontend\IndexController@index')->name('index');
Route::get('/about','Frontend\IndexController@about')->name('about');
Route::get('/contact','Frontend\IndexController@contact')->name('contact');
Route::get('/drivers','Frontend\DriverController@index')->name('drivers');
Route::get('/riders','Frontend\RiderController@index')->name('riders');
