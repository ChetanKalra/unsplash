<?php

namespace App\Providers;

use App\User;
use App\Category;
use App\Observers\UserObserver;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
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
        // User::observe(UserObserver::class);

        // dd(Session::all());

        // Session::put('locale', 'fr');

        if(!Session::has('locale'))
            app()->setLocale('en');
        else
            app()->setLocale(Session::get('locale'));

        View::composer(['categories', 'photos.create'], function($view){
            $categories = Category::all();

            $view->with('categories', $categories)->with('name', 'Kira');
        });

        

    }
}
