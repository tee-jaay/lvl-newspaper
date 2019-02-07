<?php

namespace App\Http\Controllers\Frontend\News;

use App\Models\News\NewsArticle;
use App\Models\News\NewsCategory;
use App\Models\News\NewsTag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = NewsArticle::paginate(12)->onEachSide(1);
        return view('frontend.news.index', compact('articles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $article = NewsArticle::where('slug', $slug)->first();

        // post view count
        $newsKey = 'news_' . $article->id;
        if (!Session::has($newsKey)){
            $article->increment('view_count');
            Session::put($newsKey, 1);
        }

        // previous-next post links
        $previous = NewsArticle::where('id', '<', $article->id)->orderBy('id','desc')->first();
        $next = NewsArticle::where('id', '>', $article->id)->orderBy('id')->first();

        return view('frontend.news.show', compact('article','previous', 'next'));



    }


    public function articlesByCategory($slug){
        $category = NewsCategory::where('slug', $slug)->first();
        $articles = $category->articles()->paginate(12)->onEachSide(1);
        return view('frontend.news.category.index', compact('articles','category'));
    }

    public function articlesByTag($slug){
        $tag = NewsTag::where('slug', $slug)->first();
        $articles = $tag->articles()->paginate(12)->onEachSide(1);
        return view('frontend.news.tag.index', compact('articles', 'tag'));
    }
}
