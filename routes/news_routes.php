<?php
/**
 * Created by PhpStorm.
 * User: jtam
 * Date: 1/25/19
 * Time: 11:59 PM
 */
// news home
Route::get('/news', 'Frontend\News\ArticleController@index')->name('news');
// category
Route::get('/news/category/{category}', 'Frontend\News\ArticleController@articlesByCategory')->name('articlesByCategory');
// tag
Route::get('/news/tag/{tag}', 'Frontend\News\ArticleController@articlesByTag')->name('articlesByTag');
// news
Route::resource('/news','Frontend\News\ArticleController');
