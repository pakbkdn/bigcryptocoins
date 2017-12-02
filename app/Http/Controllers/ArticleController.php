<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function listArticle()
    {
        return view('admin.articles.list-articles');
    }
    Public function addArticle()
    {
        return view('admin.articles.add-article');
    }
}
