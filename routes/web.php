<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PageController@getIndex');
Route::get('article', 'PageController@getArticle');
Route::get('detail', 'PageController@getDetail');

Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'article'],function(){
		Route::get('list-articles', 'ArticleController@listArticle')->name('list-articles');
		Route::get('add-articles', 'ArticleController@getAddArticle')->name('add-article');
		Route::post('add-articles', 'ArticleController@postAddArticle')->name('add-article');
        Route::get('edit-article/{id}', 'ArticleController@getEditArticle')->name('edit-article');
        Route::post('edit-article/{id}', 'ArticleController@postEditArticle')->name('edit-article');
        Route::get('delete-article/{id}', 'ArticleController@deleteArticle');
});
// Category
	Route::group(['prefix'=>'category'],function(){
		Route::get('/','CategoryController@showCategories');
		Route::get('/create','CategoryController@createCategory')->name('create-category');
		Route::post('/','CategoryController@saveCategory');

		Route::get('/{category}/edit','CategoryController@editCategory');
		Route::put('/{category}','CategoryController@updateCategory');
		Route::get('/{category}/delete','CategoryController@deleteCategory');
	});
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
