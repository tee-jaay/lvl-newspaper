<?php
/**
 * Created by PhpStorm.
 * User: jtam
 * Date: 1/25/19
 * Time: 11:59 PM
 */
Route::get('/news', 'Frontend\News\ArticleController@index')->name('news');
