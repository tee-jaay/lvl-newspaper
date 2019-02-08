<?php

namespace App\Http\Controllers\Frontend\News;

use App\Models\News\NewsComment;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NewsCommentController extends Controller
{
    public function store(Request $request, $post)
    {
        $this->validate($request, [
            'comment' => 'required'
        ]);
        $comment = new NewsComment();
        $comment->news_article_id = $post;
        $comment->user_id = Auth::id();
        $comment->comment = $request->comment;
        $comment->save();
        Toastr::success('Comment successfully published!', 'Success!');
        return redirect()->back();
    }
}
