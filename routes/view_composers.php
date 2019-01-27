<?php
/**
 * Created by PhpStorm.
 * User: jtam
 * Date: 1/23/19
 * Time: 6:48 PM
 */
// Topbar location
View::composer('frontend.inc.header-top', function ($view) {
    $ip = \Request::ip();
//    $ip = request()->ip();
    $position = Stevebauman\Location\Facades\Location::get($ip);
    $view->with('position', $position);
});
// Topbar social links
View::composer('frontend.inc.header-top', function ($view) {
    $socials = App\Models\Blog\SocialLink::all();
    $view->with('socials', $socials);
});

// Sidebar categories
View::composer('frontend.blog.partials.sidebar', function ($view) {
    $categories = App\Models\Blog\Category::all();
    $view->with('categories', $categories);
});
// Sidebar tags
View::composer('frontend.blog.partials.sidebar', function ($view) {
    $tags = App\Models\Blog\Tag::all();
    $view->with('tags', $tags);
});
// Footer
// About Us
View::composer('frontend.inc.footer-top-section', function ($view) {
    $about = App\Models\Site\About::all()->first();
    $view->with('about', $about);
});
// Popular posts
View::composer('frontend.inc.footer-top-section', function ($view) {
    $popular_posts = App\Models\Blog\Post::orderBy('view_count', 'DESC')->take(3)->get();
    $view->with('popular_posts', $popular_posts);
});
