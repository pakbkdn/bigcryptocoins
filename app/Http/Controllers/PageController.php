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
        $articles = array();
        foreach($categories as $category){
            $article = Article::where('category_id',$category->id)->orderBy('id', 'desc')->first();
            $articles[] = $article;
        }
        $article_hot = Article::orderBy('id', 'desc')->limit(3)->get();

        $article_top10 = Article::orderBy('id', 'desc')->limit(7)->get();
        return view('page.index', compact(['categories', 'articles', 'article_hot', 'article_top10' ]));
    }

    public function getArticle()
    {
        return view('page.articles');
    }

    public function getDetail($id)
    {
        $article = Article::Find($id);
        $relatives =  Article::where('category_id',$article->Category->id)->get();
        return view('page.detail', compact('article', 'relatives' ));
    }
}
