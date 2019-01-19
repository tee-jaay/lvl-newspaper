<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

use Illuminate\Http\Request;

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
    $position = Stevebauman\Location\Facades\Location::get(Request::ip());
//    $position = Stevebauman\Location\Facades\Location::get('103.89.24.58');
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