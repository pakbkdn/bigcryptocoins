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
       if (\Schema::hasTable('articles'))
       {
           if(count(Article::all())>0){
               $mostview = Article::orderBy('view', 'desc')->limit(7)->get();
               $article_random = Article::all()->random(3);
               View::share('mostview',$mostview);
               View::share('article_random',$article_random);
           }else{
               $mostview = array();
               $article_random = array();
               View::share('mostview',$mostview);
               View::share('article_random',$article_random);
           }
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
