<?php

namespace App\Http\Controllers\Frontend\News;

use App\Models\News\NewsArticle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleSearchController extends Controller
{
    public function search(Request $request){
        $query = $request->input('query');
        $articles = NewsArticle::where('title','LIKE',"%$query%")->paginate(8)->onEachSide(1);
        return view('frontend.news.search',compact('articles','query'));
    }
}
