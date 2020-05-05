<?php

Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('/author/data','DataController@authors')->name('author.data');
Route::resource('author', 'AuthorController');
