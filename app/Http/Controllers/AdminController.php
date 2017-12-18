<?php

namespace App\Http\Controllers;
use App\Category;
use App\Article;
use App\Adv;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard()
    {
        $categories = Category::all();
        $articles = Article:: all();
        $advertisement = Adv::all();
        $users = User::all();
        return view('admin.dashboard', compact('categories', 'articles', 'advertisement', 'users'));
    }
    public function delete()
    {
        Storage::delete("1512544549_coinbase_bitcoin_hard_fork-18-11-2017-20-56-15.png");
    }
}
