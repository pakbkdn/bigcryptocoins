<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;
class PageController extends Controller
{
    public function getIndex()
    {
        $categories = Category::all();
        $article_new = Article::where('category_id','4')->first();
        $article_analysis = Article::where('category_id','5')->first();
        $article_ico = Article::where('category_id','6')->first();
        $article_bitcoin = Article::where('category_id','7')->first();
        $article_ethererum = Article::where('category_id','8')->first();
        $article_altcoin = Article::where('category_id','9')->first();
        $article_mining = Article::where('category_id','10')->first();
        $article_hot = Article::orderBy('id', 'desc')->limit(3)->get();
        // $article_new = Article::orderBy('id', 'desc')->limit(2)->get();

        return view('page.index', compact(['categories', 'article_new', 'article_analysis',
    'article_ico', 'article_bitcoin', 'article_ethererum', 'article_altcoin', 'article_mining',
    'article_hot', 'article_new' ]));
    }

    public function getArticle()
    {
        return view('page.articles');
    }

    public function getDetail($id, $category_id)
    {
        $article = Article::Find($id);
        $articles =  Article::where('category_id', $category_id)->get();
        return view('page.detail', compact('article', 'articles' ));
    }
}
