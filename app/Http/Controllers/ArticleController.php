<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use Auth;
use Toastr;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function listArticle()
    {
        switch (Auth::user()->roles) {
            case '0':
                $articles =Article::where('user_id', Auth::id())->get();
                break;
            case '1':
                $articles =Article::where('user_id', Auth::id())->get();
                break;

            default:
                $articles = Article::orderBy('id','desc')->get();
                break;
        }
        return view('admin.articles.list-articles', compact('articles'));
    }
    public function getAddArticle()
    {
        $categories = Category::All();
        return view('admin.articles.add-article', compact('categories'));
    }
    public function postAddArticle(Request $rq)
    {
        $this->validate($rq,
        [
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'content' => 'required',
            'thumbnail' => 'required',
        ],
        [
            'title.required' => 'Title is required',
            'category.required' => 'Category is required',
            'description.required' => 'Description is required',
            'content.required' => 'Content is required',
            'thumbnail.required' => 'Thumbnail is required',
        ]
    );
        $addArticle = new Article;
        $addArticle ->title = $rq->input('title');
        $addArticle ->alias = str_slug($rq->input('title'));
        $addArticle ->category_id = $rq->input('category');
        $addArticle ->description = $rq->input('description');
        $addArticle ->content = $rq->input('content');
        $addArticle ->user_id = Auth::id();
        if($rq->hasFile('thumbnail'))
        {
            $file = $rq->file('thumbnail');
            $filename = $file->getClientOriginalName('thumbnail');
            $images = time()."_".$filename;
            $destinationPath = public_path('/page/images/thumbnail');
            $file->move($destinationPath, $images);
            $addArticle->thumbnail = $images;
        }
        $addArticle ->hot = $rq->input('hot');
        $addArticle ->save();
        Toastr::success('Add successful Article', $title = null, $options = []);
        return redirect()->route('list-articles');
    }
    public function getEditArticle($id)
    {
        $article = Article::find($id);
        $categories = Category::All();
        return view('admin.articles.edit-article', compact('article', 'categories'));
    }
    public function postEditArticle($id, Request $rq)
    {
        $this->validate($rq,
        [
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
        ],
        [
            'title.required' => 'Title is required',
            'description.required' => 'Description is required',
            'content.required' => 'Content is required',
        ]
    );
        $editArticle = Article::find($id);
        $editArticle ->title = $rq->input('title');
        if($rq->input('category')!= 0)
        {
            $editArticle ->category_id = $rq->input('category');
        }
        $editArticle ->description = $rq->input('description');
        $editArticle ->content = $rq->input('content');
        if($rq->hasFile('thumbnail'))
        {
            $file = $rq->file('thumbnail');
            $filename = $file->getClientOriginalName('thumbnail');
            $images = time()."_".$filename;
            $destinationPath = public_path('/page/images/thumbnail');
            $file->move($destinationPath, $images);
            $oldfile = $editArticle->thumbnail;
            Storage::delete('/page/images/thumbnail/1512545922_anh phuong.jpg');
            $editArticle['thumbnail'] = $images;
        }
        $editArticle ->hot = $rq->input('hot');
        $editArticle ->update();
        Toastr::success('Edit successful Article', $title = null, $options = []);
        return redirect()->route('list-articles');
    }
    public function deleteArticle($id)
    {
        $deleteArticle = Article::find($id);
        $deleteArticle ->delete();
        return redirect()->route('list-articles');
    }
}
