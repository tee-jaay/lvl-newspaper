<?php

namespace App\Http\Controllers\Backend\Admin\Blog;

use App\Models\Blog\Tag;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('backend.dashboard.tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.dashboard.tag.create');
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
            'name' => 'required|min:3|max:20',
        ]);
        $tag = new Tag();

        $tag->name = $request->name;
        $tag->slug = str_slug($tag->name);
        if ($request->status == null) {
            $tag->status = 0;
        } else {
            $tag->status = 1;
        }
        $tag->description = $request->description;
        $tag->save();

        Toastr::success('New Tag Saved Successfully!', 'Done!');

        return redirect()->route('admin.blog-tag.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag = Tag::findOrFail($id);
        return view('backend.dashboard.tag.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        return view('backend.dashboard.tag.edit', compact('tag'));
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
        $this->validate($request, [
            'name' => 'required',
        ]);

        $tag = Tag::findOrFail($id);

        $tag->name = $request->name;
        $tag->slug = str_slug($tag->name);
        if ($request->status == null) {
            $tag->status = 0;
        } else {
            $tag->status = 1;
        }
        $tag->description = $request->description;

        $tag->update();

        Toastr::success('Tag Updated Successfully!', 'Done!');


        return redirect()->route('admin.blog-tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
