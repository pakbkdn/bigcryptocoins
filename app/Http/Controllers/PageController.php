<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function getDetail()
    {
        return view('page.detail');
    }
}
