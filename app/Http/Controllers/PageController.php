<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
class PageController extends Controller
{
    public function getIndex()
    {
        $categories = Category::all();
        $articles = array();
        foreach($categories as $category){
            $article = Article::where('category_id',$category->id)->orderBy('id', 'desc')->first();
            if(count($article)>0){
                $articles[] = $article;
            }
        }
        $article_couser = Article::orderBy('id','desc')->take(8)->get();
        $article_hot = Article::orderBy('id', 'desc')->limit(3)->get();
        $article_top10 = Article::orderBy('id', 'desc')->limit(10)->get();
        $article_all = Article::orderBy('id','desc')->paginate(6);
        return view('page.index', compact([ 'articles', 'article_couser', 'article_hot', 'article_top10', 'article_all','mostview' ]));
    }

    public function getArticle($category)
    {
        $category = Category::where('alias', $category)->first();
        $articles = Article::where('category_id', $category->id)->paginate(9);
        return view('page.articles', compact('category', 'articles'));
    }

    public function getDetail($title)
    {
        $article = Article::where('alias', $title)->first();
        $article->view = $article->view + 1;
        $article->save();
        $relatives =  Article::where('category_id', $article->Category->id)
                            ->where('alias','<>', $title)
                            ->get();
        return view('page.detail', compact('article', 'relatives'));
    }

    public function search(Request $req)
    {
        $key = $req->search;
        $articles = array();
        $articles_is_titles = Article::where('title','like','%'.$req->search.'%')->get();
        foreach ($articles_is_titles as $article_is_title ) {
            $articles[] = $article_is_title;
        }

        $articles_is_description = Article::where('description','like','%'.$req->search.'%')->get();
        foreach ($articles_is_titles as $article_is_title ) {
            $articles[] = $article_is_title;
        }

        $categories = Category::where('name','like','%'.$req->search.'%')->get();
        foreach ($categories as $category ) {
            $category_id = $category->id;
            $articles_is_category = Article::where('category_id',$category_id)->get();
            foreach ($articles_is_category as $article_is_category) {
                $articles[] = $article_is_category;
            }
        }

        $articles = array_unique($articles);
        $articles_sort = collect($articles)->sortbyDesc('id');
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $col = new Collection($articles_sort);
        $perPage = 9;
        $currentPageSearchResults = $col->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $result_search = new LengthAwarePaginator($currentPageSearchResults, count($col), $perPage, $currentPage,['path' => LengthAwarePaginator::resolveCurrentPath()] );
        return view('page.search')->with(['result_search'=>$result_search->appends(Input::except('page')),'articles_sort'=>$articles_sort,'key'=>$key]);
        // return view('page.articles', compact('article_view'));
    }
}
