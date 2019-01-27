<?php

namespace App\Providers;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
        // database
        Schema::defaultStringLength(191);
        // url
        if(env('APP_ENV') !== 'local')
        {
            $url->forceScheme('https');
        }
        // Menu
        View::composer('frontend.inc.menu-section', function ($view) {
            $categories = \App\Models\Blog\Category::all();
            $view->with('categories', $categories);
        });
        View::composer('frontend.inc.menu-section', function ($view) {
            $posts = \App\Models\Blog\Post::all()->groupBy('category_id');
            $view->with('posts', $posts);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
