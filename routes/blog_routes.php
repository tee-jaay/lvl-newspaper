<?php
/**
 * Created by PhpStorm.
 * User: jtam
 * Date: 1/25/19
 * Time: 11:56 PM
 */
Route::get('/blog', 'Frontend\Blog\PostController@index')->name('blog');

Route::get('/blog/category/{category}', 'Frontend\Blog\PostController@postsByCategory')->name('postByCategory');
Route::get('/posts/category/{category}', 'Frontend\Blog\PostController@postsByCategory')->name('postByCategory');

Route::get('/blog/tag/{tag}', 'Frontend\Blog\PostController@postsByTag')->name('postByTag');
Route::get('/posts/tag/{tag}', 'Frontend\Blog\PostController@postsByTag')->name('postByTag');

Route::resource('/post', 'Frontend\Blog\PostController');

// Page
Route::get('/contact', 'Frontend\Site\PageController@contact')->name('contact');

//Subscriber
Route::post('subscriber', 'Frontend\Blog\SubscriberController@store')->name('subscriber.store');

//Comment
Route::group(['middleware' => ['auth']], function () {

    Route::post('comment/{post}', 'Frontend\Blog\CommentController@store')->name('comment.store');

});
// Post Search
Route::get('blog/search', 'Frontend\Blog\PostSearchController@search')->name('post.search');