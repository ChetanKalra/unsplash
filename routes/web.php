<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories/create', 'CategoryController@index')->name('category.create');

Route::get('/categories', 'CategoryController@display')->name('category.display');

Route::get('/show/{id}', 'CategoryController@show')->name('category.show');

Route::post('/categories/store', 'CategoryController@store')->name('category.store');

Route::get('/edit/{id}', 'CategoryController@edit')->name('category.edit');

Route::post('/categories/update/{id}', 'CategoryController@update')->name('category.update');

Route::get('/categories/delete/{id}', 'CategoryController@delete')->name('category.delete');
