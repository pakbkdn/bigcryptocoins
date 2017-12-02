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
Route::get('list-articles', 'ArticleController@listArticle')->name('list-articles');
Route::get('add-article', 'ArticleController@getAddArticle')->name('add-article');
Route::post('add-article', 'ArticleController@postAddArticle')->name('add-article');
Route::get('edit-article/{id}', 'ArticleController@getEditArticle')->name('edit-article');
Route::post('edit-article/{id}', 'ArticleController@postEditArticle')->name('edit-article');
Route::get('delete-article/{id}', 'ArticleController@deleteArticle');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
