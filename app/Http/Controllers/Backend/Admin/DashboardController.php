<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\Blog\Category;
use App\Models\Blog\Comment;
use App\Models\Blog\Post;
use App\Models\Blog\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $posts_count = Post::all()->count();
        $categories_count = Category::all()->count();
        $tags_count = Tag::all()->count();
        $comments_count = Comment::all()->count();

        return view('backend.dashboard.index', compact('posts_count', 'categories_count', 'tags_count', 'comments_count'));
    }
}
