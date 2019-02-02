<?php

namespace App\Http\Controllers\Backend\Admin\Blog;

use App\Models\Blog\Category;
use App\Models\Blog\Post;
use App\Models\Blog\PostImage;
use App\Models\Blog\Tag;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('backend.dashboard.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('backend.dashboard.post.create', compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
           'title'=> 'required',
           'category_id'=> 'required',
       ]);

       $slug = str_slug($request->title);

       $mainImage = $request->file('main');

       if (isset($mainImage)){
           // make unique name image
           $currentDate = Carbon::now()->toDateString();
           // LOCAL ENV
            // if (config('app.env') == 'production') {
           if (config('app.env') == 'local'){
               $imageName = $slug . '-' . $currentDate . '' . uniqid() . '-' . $mainImage->getClientOriginalExtension();
               if (!Storage::disk('public')->exists('blog/post')) {
                   Storage::disk('public')->makeDirectory('blog/post');
               }
               $resizeImage = Image::make($mainImage)->resize(730, 400)->save();
               Storage::disk('public')->put('blog/post/' . $imageName, $resizeImage);
           }

       }

       $post = new Post();

       $post->author_id = Auth::id();
       $post->title = $request->title;
       $post->slug = $slug;
       $post->category_id = $request->category_id;
       $post->top_text = $request->top_text;
       $post->italic = $request->italic;
       $post->mid_text = $request->color_quote;
       $post->bottom_text = $request->bottom_text;

       $post->image->main = $request->main;

       $post->image->float_left = $request->float_left;

       $post->image->float_right = $request->float_right;

//       $post->save();
//
//       Toastr::success('Post Saved Successfully!', 'Done!');

       return redirect()->route('admin.blog-post.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('backend.dashboard.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('backend.dashboard.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
    }
}
