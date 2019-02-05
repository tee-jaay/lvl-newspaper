<?php

namespace App\Http\Controllers\Backend\Admin\Blog;

use App\Http\Controllers\Backend\Admin\Site\CloudinarySettings;
use App\Models\Blog\Category;
use App\Models\Blog\Post;
use App\Models\Blog\PostImage;
use App\Models\Blog\Tag;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Cloudinary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    public function __construct()
    {
        $settings = new CloudinarySettings;
        $settings->setup_cloudinary();

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();
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
        return view('backend.dashboard.post.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
        ]);

        $slug = str_slug($request->title);

        $categoryId = $request->category;
        $postCategory = Category::where('id', $categoryId)->first();
        $categoryName = $postCategory->slug;
        $postImagePath = 'blog/post/' . $categoryName . '/';

        // main image
        $mainImage = $request->file('main');
        if (isset($mainImage)) {
            // make unique name image
            $currentDate = Carbon::now()->toDateString();
            // LOCAL ENV
            if (config('app.env') == 'production') {
//           if (config('app.env') == 'local'){
                $mainImageName = $slug . '-' . $currentDate . '' . uniqid() . '-main' . '.' . $mainImage->getClientOriginalExtension();
                if (!Storage::disk('public')->exists($postImagePath)) {
                    Storage::disk('public')->makeDirectory($postImagePath, 0755, true);
                }
                $resizeImage = Image::make($mainImage)->resize(730, 400)->save();
                Storage::disk('public')->put($postImagePath . $mainImageName, $resizeImage);
            }
             // PRODUCTION ENV
                //  if (config('app.env') == 'production') {
            if (config('app.env') == 'local') {
                $mainImageName = $slug . '-main-' . $currentDate . '' . uniqid();

                // cloudinary
                $cloudinary_main_image_data = null;
                $cloudinary_main_image_data = Cloudinary\Uploader::upload(
                    $request->main,
                    array(
                        "folder" => "laravel/hashnews/blog/" . $categoryName . '/',
                        "public_id" => $mainImageName,
                        "width" => 730,
                        "height" => 400,
                        "overwrite" => TRUE,
                        "use_filename" => TRUE,
                        "resource_type" => "image")
                );
            }
        }else{
            $mainImageName = "default-main.png";
        }

        // left image
        $leftImage = $request->file('float_left');
        if (isset($leftImage)){
             // make unique name image
            $currentDate = Carbon::now()->toDateString();
             // LOCAL ENV
             if (config('app.env') == 'production') {
                //  if (config('app.env') == 'local'){
                $leftImageName = $slug . '-' . $currentDate . '' . uniqid() . '-left' .'.' . $leftImage->getClientOriginalExtension();
                if (!Storage::disk('public')->exists($postImagePath)) {
                    Storage::disk('public')->makeDirectory($postImagePath, 0755, true);
                }
                $resizeImage = Image::make($leftImage)->resize(359, 534)->save();
                Storage::disk('public')->put($postImagePath . $leftImageName, $resizeImage);
            }
            // PRODUCTION ENV
            //  if (config('app.env') == 'production') {
            if (config('app.env') == 'local') {
                $leftImageName = $slug . '-left-' . $currentDate . '' . uniqid();

                // cloudinary
                $cloudinary_left_image_data = null;
                $cloudinary_left_image_data = Cloudinary\Uploader::upload($request->float_left,
                    array(
                        "folder" => "laravel/hashnews/blog/" . $categoryName . '/',
                        "public_id" => $leftImageName,
                        "width" => 359,
                        "height" => 534,
                        "overwrite" => TRUE,
                        "use_filename" => TRUE,
                        "resource_type" => "image")
                );
            }

        }else{
            $leftImageName = "default-left.png";
        }

        // right image
//        $rightImage = $request->file('float_right');
//        if (isset($rightImage)){
//            // make unique name image
//            $currentDate = Carbon::now()->toDateString();
//            // LOCAL ENV
//            // if (config('app.env') == 'production') {
//            if (config('app.env') == 'local'){
//                $rightImageName = $slug . '-' . $currentDate . '' . uniqid() . '-right' .'.' . $leftImage->getClientOriginalExtension();
//                if (!Storage::disk('public')->exists($postImagePath)) {
//                    Storage::disk('public')->makeDirectory($postImagePath, 0755, true);
//                }
//                $resizeImage = Image::make($rightImage)->resize(352, 271)->save();
//                Storage::disk('public')->put($postImagePath . $rightImageName, $resizeImage);
//            }
//
//        }

        $post = new Post();

        $post->author_id = Auth::id();
        $post->title = $request->title;
        $post->slug = $slug;
        $post->category_id = $request->category;
        $post->top_text = $request->top_text;
        $post->italic = $request->italic;
        $post->mid_text = $request->mid_text;
        $post->color_quote = $request->color_quote;
        $post->bottom_text = $request->bottom_text;

        $post->save();

        $post->tags()->attach($request->tags);

        $postImage = new PostImage();

        $postImage->post_id = $post->id;
//        if (config('app.env') == 'production') {
        if (config('app.env') == 'local') {
            $postImage->main = $cloudinary_main_image_data['secure_url'];
            $postImage->float_left = $cloudinary_left_image_data['secure_url'];
        } else {
            $postImage->main = $mainImageName;
            $postImage->float_left = $leftImageName;
        }

//       $postImage->float_left = $leftImageName;
//       $postImage->float_right = $rightImageName;

        $postImage->save();

        Toastr::success('Post Saved Successfully!', 'Done!');

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
