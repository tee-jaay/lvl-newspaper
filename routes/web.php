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

Route::get('/home', 'HomeController@index')->name('home');

// View Composers
@include 'view_composers.php';