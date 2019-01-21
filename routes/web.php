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

Route::get('/blog/category/{category}','Frontend\PostController@postsByCategory')->name('postByCategory');
Route::get('/posts/category/{category}','Frontend\PostController@postsByCategory')->name('postByCategory');

Route::get('/blog/tag/{tag}','Frontend\PostController@postsByTag')->name('postByTag');
Route::get('/posts/tag/{tag}','Frontend\PostController@postsByTag')->name('postByTag');

Route::resource('/post','Frontend\PostController');

// Page
Route::get('/contact','Frontend\PageController@contact')->name('contact');

//Subscriber
Route::post('subscriber', 'Frontend\SubscriberController@store')->name('subscriber.store');

//Comment
Route::group(['middleware' => ['auth']], function () {

    Route::post('comment/{post}', 'Frontend\CommentController@store')->name('comment.store');

});
// Auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Topbar location
View::composer('frontend.inc.header-top', function($view) {
    $ip = \Request::ip();
//    $ip = request()->ip();
    $position = Stevebauman\Location\Facades\Location::get($ip);
    $view->with('position',$position);
});
// Topbar social links
View::composer('frontend.inc.header-top', function($view) {
    $socials = App\Models\SocialLink::all();
    $view->with('socials', $socials);
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
// Footer
// About Us
View::composer('frontend.inc.footer-top-section', function($view){
    $about = App\Models\About::all()->first();
    $view->with('about', $about);
});
// Popular posts
View::composer('frontend.inc.footer-top-section', function($view){
    $popular_posts = App\Models\Post::orderBy('view_count','DESC')->take(3)->get();
    $view->with('popular_posts',$popular_posts);
});
