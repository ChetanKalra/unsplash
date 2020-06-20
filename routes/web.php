<?php

use App\Tag;
use App\User;
use App\Photo;
use App\Profile;
use App\Category;
use Carbon\Carbon;
use App\Mail\WelcomeUser;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use App\Mail\NewPhotoMarkdownMail;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\UserResource;
use App\Http\Resources\PhotoResource;
use App\Notifications\UserNotification;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\UserResourceCollection;
use App\Http\Resources\PhotoResourceCollection;
use App\Http\Resources\CategoryResourceCollection;

// Route::get('/', function () {
//     // return Auth::user()->name;
//     // return view('welcome');
// });

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
    // Route::get('/', 'PhotoController@index')->name('photos.index');
});

// Route::get('/users', 'UserController@index')->name('users.index');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/validation', 'ValidationController@index')->name('validation');
Route::post('/validation/store', 'ValidationController@store')->name('validation.store');

Route::view('/examples', 'examples');

// Route::get('/helpers', function(){
//     return session('_token');
// });


// Route::get('/session', function(){
//     return Session::all();
// });

Route::get('/session', 'PhotoController@returnSession');


// Route::get('/fetch-users', function(){

//     // return User::all();

//     return DB::table('users')->select('name')->get();

//     // return DB::table('categories')->whereNull('deleted_at')->get();

//     // return DB::table('photos')->where('category_id', '!=', 1)->paginate(3);

//     // return DB::table('photos')->join('categories', 'photos.category_id', '=', 'categories.id')->get();

//     DB::table('categories')->insert([ 
//         'name' => 'Category Name',
//         'created_at' => Carbon::now(),
//         'updated_at' => Carbon::now()
//     ]);

//     // $faker = Faker::create();

//     // $user = User::create([
//     //     'name' => $faker->name,
//     //     'email' => 'KIRA11@gmail.com',
//     //     'password' => 'password'
//     // ]);

//     // return $user;

// });

// Route::get('/lang', function(){

//     app()->setLocale('fr');
    
//     return view('lang');
// });

// Route::get('/resource', function(){


//     return public_path();
//     // $categories = Category::all();

//     // return new CategoryResourceCollection($categories);
//     // return new CategoryResource($category);
// });


// Route::get('/notification', function(){
//     $user = User::find(107);
//     $user->notify(new UserNotification());



//     return $user->readNotifications()->first();

//     // $notification->markAsRead();

// });