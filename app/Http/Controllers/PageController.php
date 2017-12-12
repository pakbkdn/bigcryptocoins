<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
class PageController extends Controller
{
    public function getIndex()
    {
        $categories = Category::all();
        $articles = array();
        foreach($categories as $category){
            $article = Article::where('category_id',$category->id)->orderBy('id', 'desc')->first();
            $articles[] = $article;
        }
        $article_hot = Article::orderBy('id', 'desc')->limit(3)->get();
        $article_top10 = Article::orderBy('id', 'desc')->limit(10)->get();
        $article_all = Article::orderBy('id','desc')->paginate(6);
        return view('page.index', compact([ 'articles', 'article_hot', 'article_top10', 'article_all' ]));
    }

    public function getArticle()
    {
        return view('page.articles');
    }

    public function getDetail($title)
    {
        $article = Article::where('alias', $title)->first();
        $relatives =  Article::where('category_id', $article->Category->id)->get();
        return view('page.detail', compact('article', 'relatives'));
    }
}
