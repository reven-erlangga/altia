<?php

Route::get('/', 'HomeController@index')->name('dashboard');
Route::get('/author', 'AuthorController@index')->name('author.index');
Route::get('/author/json','DataController@authors')->name('author.json');
