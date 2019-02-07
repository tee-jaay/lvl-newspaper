<?php
/**
 * Created by PhpStorm.
 * User: jtam
 * Date: 1/25/19
 * Time: 11:59 PM
 */
// news home
Route::get('/news', 'Frontend\News\ArticleController@index')->name('news');

// news
Route::resource('/news','Frontend\News\ArticleController');
