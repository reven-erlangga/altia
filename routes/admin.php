<?php

Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('/author/data','DataController@authors')->name('author.data');
Route::get('/book/data','DataController@books')->name('book.data');

Route::resource('author', 'AuthorController');
Route::resource('book', 'BookController');
