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
// Menu
View::composer('frontend.inc.menu-section', function ($view) {
    $categories = App\Models\Blog\Category::all();
    $view->with('categories', $categories);
});
View::composer('frontend.inc.menu-section', function ($view) {
    $posts = App\Models\Blog\Post::all()->groupBy('category_id');
    $view->with('posts', $posts);
});
// Blog Sidebar categories
View::composer('frontend.blog.partials.sidebar', function ($view) {
    $categories = App\Models\Blog\Category::all();
    $view->with('categories', $categories);
});
// Blog Sidebar tags
View::composer('frontend.blog.partials.sidebar', function ($view) {
    $tags = App\Models\Blog\Tag::all();
    $view->with('tags', $tags);
});
//////////
// News Sidebar categories
View::composer('frontend.news.partials.sidebar', function ($view) {
    $categories = App\Models\News\NewsCategory::all();
    $view->with('categories', $categories);
});
// News Sidebar tags
View::composer('frontend.news.partials.sidebar', function ($view) {
    $tags = App\Models\News\NewsTag::all();
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
// Top news
View::composer('frontend.inc.footer-top-section', function ($view) {
    $top_news = App\Models\News\NewsArticle::orderBy('view_count', 'DESC')->take(3)->get();
    $view->with('top_news', $top_news);
});
