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
    // Category
    Route::resource('blog/category','Blog\CategoryController', ['names' => 'blog-category']);
    // Tag
    Route::resource('blog/tag','Blog\TagController', ['names' => 'blog-tag']);
    // Post
    Route::resource('blog/post','Blog\PostController', ['names' => 'blog-post']);

    // ------ News ------ //
    // Category
    Route::resource('news/category','News\CategoryController', ['names' => 'news-category']);
    // Tag
    Route::resource('news/tag','News\TagController', ['names' => 'news-tag']);
    // Post
    Route::resource('news/post','News\ArticleController', ['names' => 'news-article']);

    //--------------------//
    // Cloudinary
    Route::resource('cloudinary', 'Site\CloudinaryController');
});

Route::get('/home', 'HomeController@index')->name('home');

// View Composers
@include 'view_composers.php';