<?php

Route::get('/dasboard','Backend\AdminController@index')->name('admin');
Route::resource('/contact','Backend\ContactController',['only' => ['index','edit','update']]);