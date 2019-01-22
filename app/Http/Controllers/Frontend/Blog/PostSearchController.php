<?php

namespace App\Http\Controllers\Frontend\Blog;

use App\Models\Blog\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostSearchController extends Controller
{
    public function search(Request $request){
        $query = $request->input('query');
        $posts = Post::where('title','LIKE',"%$query%")->paginate(4)->onEachSide(1);
//        $posts = Post::where('title','LIKE',"%$query%")->approved()->status()->get();
        return view('frontend.blog.search',compact('posts','query'));
    }
}
