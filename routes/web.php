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
Route::get('/blog','Frontend\PostController@index')->name('blog');
Route::resource('/post','Frontend\PostController');
// Page
Route::get('/contact','Frontend\PageController@contact')->name('contact');
// Auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Topbar location
View::composer('frontend.inc.header-top', function($view) {
    $ip = request()->ip();
    $position = Stevebauman\Location\Facades\Location::get($ip);
    $view->with('position',$position);
});

// Sidebar categories
View::composer('frontend.blog.partials.sidebar',function ($view){
    $categories = App\Models\Category::all();
    $view->with('categories',$categories);
});
// Sidebar tags
View::composer('frontend.blog.partials.sidebar',function ($view){
    $tags = App\Models\Tag::all();
    $view->with('tags',$tags);
});