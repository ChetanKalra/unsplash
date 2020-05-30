<?php

use App\Tag;
use App\User;
use App\Photo;
use App\Profile;
use App\Category;
use App\Mail\WelcomeUser;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    // return Auth::user()->name;
    return view('welcome');
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


Route::group(['prefix' => 'photos', 'middleware' => 'auth'], function(){
    Route::get('/create', 'PhotoController@create')->name('photos.create');
    Route::post('/store', 'PhotoController@store')->name('photos.store');
    Route::get('/', 'PhotoController@index')->name('photos.index');
});



Route::get('/test', function(){

    // $user = User::find(1);

    // return $user->abc;

    // $profile = Profile::where('user_id', $user->id)->first();

    // return $profile;
    // $profile = Profile::find(1);

    // return $profile->user;

    // $category = Category::find(4);
    // return $category->photos;

    // $photo = Photo::find(2);

    // return $photo->category;

    // return $photo->tags;

    // $tag = Tag::find(1);

    // return $tag->photos;


    $photo = Photo::find(1);

    $photo->tags()->syncWithoutDetaching([1, 2]);

    // attach
    // detach
    // sync
    // syncWithoutDetaching

});

Route::get('/users', 'UserController@index')->name('users.index');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/validation', 'ValidationController@index')->name('validation');
Route::post('/validation/store', 'ValidationController@store')->name('validation.store');


Route::get('/testmail', function(){



    $welcomeUser = new WelcomeUser('Chetan');
    
    $emails = ['first@gmail.com', 'second@gmail.com', 'third@gmail.com'];
    
    Mail::to($emails)->send($welcomeUser);

});

Route::get('/delete/category', function(){

    $category = Category::withTrashed()->find(1);

    // return $category;
    $category->restore();

    // return Category::all();

});