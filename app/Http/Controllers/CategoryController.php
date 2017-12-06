<?php
namespace App\Http\Controllers;


use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Category;
use App\Article;
use App\Http\Requests\categoryRequest;

class CategoryController extends Controller
{
    public function showCategories()
    {
    	$categories=Category::all();
    	return view('admin.categories.show', compact('categories', 'count'));
    }
    public function createCategory()
    {
    	return view('admin.categories.create');
    }
    public function saveCategory(categoryRequest $request)
    {
    	$data=Input::all();
    	$category = Category::create($data);
    	return redirect('administrator/category');
    }
    public function editCategory(Category $category)
    {
    	return view('admin.categories.edit',compact('category'));
    }
    public function updateCategory(Category $category,categoryRequest $request)
    {
        $data=Input::all();
        $category->update($data);
        return redirect('administrator/category');
    }
    public function deleteCategory($category)
    {
        $data = Category::find($category);
        $data ->articles()->delete();
        $data ->delete();
        return redirect('administrator/category');
    }
    public function getArticleList($id)
    {
        $category = Category::find($id);
        $articles = $category ->articles();
        return view('admin.categories.articles', compact('category','articles'));
    }
}
