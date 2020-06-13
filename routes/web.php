<?php

use App\Tag;
use App\User;
use App\Photo;
use App\Profile;
use App\Category;
use Carbon\Carbon;
use App\Mail\WelcomeUser;
use Illuminate\Support\Str;
use App\Mail\NewPhotoMarkdownMail;

Route::get('/', function () {
    // return Auth::user()->name;
    // return view('welcome');
});

Route::group(['middleware' => 'auth', 'prefix' => 'categories'], function(){
    Route::get('/create', 'CategoryController@index')->name('category.create');
    Route::get('/', 'CategoryController@display')->name('category.display');
    Route::get('/show/{id}', 'CategoryController@show')->name('category.show');
    Route::post('/store', 'CategoryController@store')->name('category.store');
    Route::get('/edit/{id}', 'CategoryController@edit')->name('category.edit');
    Route::post('/update/{id}', 'CategoryController@update')->name('category.update');
    Route::get('/delete/{id}', 'CategoryController@delete')->name('category.delete');
});

Route::resource('/categories', 'TestController');

Route::group(['prefix' => 'photos', 'middleware' => 'auth'], function(){
    Route::get('/create', 'PhotoController@create')->name('photos.create');
    Route::post('/store', 'PhotoController@store')->name('photos.store');
    Route::get('/', 'PhotoController@index')->name('photos.index');
});

// Route::get('/users', 'UserController@index')->name('users.index');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/validation', 'ValidationController@index')->name('validation');
Route::post('/validation/store', 'ValidationController@store')->name('validation.store');

Route::view('/examples', 'examples');

Route::get('/helpers', function(){
    return session('_token');
});


// Route::get('/session', function(){
//     return Session::all();
// });

Route::get('/session', 'PhotoController@returnSession');
