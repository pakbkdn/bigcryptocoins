<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;

class PageController extends Controller
{
    public function getIndex()
    {
        return view('page.index');
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
