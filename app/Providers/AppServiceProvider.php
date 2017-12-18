<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Category;
use App\Article;
use App\Adv;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Schema::defaultStringLength(191);
        if (\Schema::hasTable('categories'))
        {
           $categories = Category::all();
           View::share('categories', $categories);
       }
       if (\Schema::hasTable('Articles'))
       {
           $mostview = Article::orderBy('view', 'desc')->limit(5)->get();
           View::share('mostview', $mostview);
       }
       if (\Schema::hasTable('ads'))
       {
           $ads = Adv::orderBy('id', 'desc')->limit(5)->get();
           View::share('ads', $ads);
       }

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
