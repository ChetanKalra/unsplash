<?php

namespace App\Providers;

use App\User;
use App\Category;
use App\Observers\UserObserver;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserObserver::class);

        

        // $categories = Category::all();
        // View::share('categories', $categories);

        // $name = 'XYZ';
        // View::share('name', $name);

        View::composer(['categories', 'photos.create'], function($view){
            $categories = Category::all();

            $view->with('categories', $categories)->with('name', 'Kira');
        });

    }
}
