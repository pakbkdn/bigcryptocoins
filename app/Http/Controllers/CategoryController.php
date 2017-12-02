<?php
namespace App\Http\Controllers;


use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\categoryRequest;

class CategoryController extends Controller
{
    public function showCategories() 
    {
    	$categories=Category::all();
    	return view('admin.categories.show', compact('categories'));
    }
    public function createCategory()
    {
    	return view('admin.categories.create');
    }
    public function saveCategory(categoryRequest $request)
    {
    	$data=Input::all();
    	$category = Category::create($data);
    	return redirect('admin/category');
    }
    public function editCategory(Category $category)
    {
    	return view('admin.categories.edit',compact('category'));
    }
    public function updateCategory(Category $category,categoryRequest $request)
    {    	    	
        $data=Input::all();
        $category->update($data);
        return redirect('admin/category');
    }
    public function deleteCategory(Category $category)
    {
        $category->delete();
        return redirect('admin/category');
    }
}
