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

Route::get('/', 'PageController@getIndex')->name('home');
Route::get('article', 'PageController@getArticle');
Route::get('detail', 'PageController@getDetail');


Route::group(['prefix'=>'administrator', 'middleware'=>'Login'],function(){
	Route::get('/', 'AdminController@dashboard')->name('admin');
	Route::group(['prefix'=>'article'],function(){
		Route::get('list-articles', 'ArticleController@listArticle')->name('list-articles');
		Route::get('add-articles', 'ArticleController@getAddArticle')->name('add-article');
		Route::post('add-articles', 'ArticleController@postAddArticle')->name('add-article');
        Route::get('edit-article/{id}', 'ArticleController@getEditArticle')->name('edit-article');
        Route::post('edit-article/{id}', 'ArticleController@postEditArticle')->name('edit-article');
        Route::get('delete-article/{id}', 'ArticleController@deleteArticle');
	});
	// Category
	Route::group(['prefix'=>'category', 'middleware'=>'Admin'],function(){
		Route::get('/','CategoryController@showCategories')->name('list-categories');
		Route::get('/create','CategoryController@createCategory')->name('create-category');
		Route::post('/','CategoryController@saveCategory');
		Route::get('/{category}/edit','CategoryController@editCategory');
		Route::put('/{category}','CategoryController@updateCategory');
		Route::get('/{category}/delete','CategoryController@deleteCategory');
		Route::get('/{id}', 'CategoryController@getArticleList');
	});
	Route::group(['prefix'=>'ads', 'middleware'=>'Admin'],function(){
		Route::get('/', 'AdsController@listAds')->name('list-ads');
		Route::get('add-ads', 'AdsController@getAddAds')->name('add-ads');
		Route::post('add-ads', 'AdsController@postAddAds')->name('add-ads');
		Route::get('edit-ads/{id}', 'AdsController@getEditAds')->name('edit-ads');
		Route::post('edit-ads/{id}', 'AdsController@postEditAds')->name('edit-ads');
		Route::get('delete-ads/{id}', 'AdsController@deleteAds');

	});
	//Profile
	Route::group(['prefix'=>'user'], function(){
		Route::get('/profile', 'UserController@updateProfile' );
		Route::get('/logout', 'UserController@logout' );
		Route::post('/editprofile/{id}', 'UserController@save');
		Route::get('/changepass', 'UserController@chagepass');
		Route::post('/change-password', 'UserController@savepass');
	});
	//manage User
	Route::group(['prefix'=>'manage_user', 'middleware'=>'Admin'], function(){
		Route::get('/list_user', 'ManageUserController@listUser')->name('manageUser');
		Route::get('/changeroles/{id}','ManageUserController@changeRoles');
		Route::post('/editusers/{id}','ManageUserController@saveRoles');
	});

});
Auth::routes();
