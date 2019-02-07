<?php

namespace App\Http\Controllers\Frontend\News;

use App\Models\News\NewsArticle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        dd($slug);
    }


}
