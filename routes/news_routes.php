<?php
/**
 * Created by PhpStorm.
 * User: jtam
 * Date: 1/25/19
 * Time: 11:59 PM
 */
// News home
Route::get('/news', 'Frontend\News\ArticleController@index')->name('news');
// Category
Route::get('/news/category/{category}', 'Frontend\News\ArticleController@articlesByCategory')->name('articlesByCategory');
// Tag
Route::get('/news/tag/{tag}', 'Frontend\News\ArticleController@articlesByTag')->name('articlesByTag');
// News
Route::resource('/news','Frontend\News\ArticleController');
//Comment
Route::group(['middleware' => ['auth']], function () {

    Route::post('news/comment/{post}', 'Frontend\News\NewsCommentController@store')->name('news.comment.store');

});
// Article Search
Route::get('news-article/search', 'Frontend\News\ArticleSearchController@search')->name('news.search');

