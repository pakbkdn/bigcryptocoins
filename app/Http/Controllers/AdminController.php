<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function listArticle()
    {
        return view('admin.list-articles');
    }
}
