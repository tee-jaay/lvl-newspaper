<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


Route::get('/', function () {
    return view('welcome');
});
// Blog
@include 'blog_routes.php';
// News
@include 'news_routes.php';
// Contact
Route::post('/contact', 'Frontend\Site\ContactController@store')->name('contact.store');

// Auth
Auth::routes();
// Admin route group
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Backend\Admin', 'middleware' => ['auth']], function () {
    // Dashboard
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    // ------ Blog ------ //
    // category
    Route::resource('blog/category','Blog\CategoryController', ['names' => 'blog-category']);
    // tag
    Route::resource('blog/tag','Blog\TagController', ['names' => 'blog-tag']);
});

Route::get('/home', 'HomeController@index')->name('home');

// View Composers
@include 'view_composers.php';