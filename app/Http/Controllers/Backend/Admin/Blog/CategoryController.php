<?php

namespace App\Http\Controllers\Backend\Admin\Blog;

use App\Models\Blog\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('backend.dashboard.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.dashboard.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'bg-color'=>'required',
        ]);

        $category = new Category();
        $category->name = $request['name'];
        $category->slug = str_slug($category->name);
        $category->bg_color = $request['bg-color'];
        if ($request['status']== null){
            $category->status = 0;
        }
        $category->description = $request['description'];

        $category->save();

        Toastr::success('New Category Saved Successfully!','Done!');

        return redirect()->route('admin.blog-category.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.dashboard.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.dashboard.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'=>'required',
            'bg-color'=>'required',
        ]);

        $category = Category::findOrFail($id);

        $category->name = $request['name'];
        $category->slug = str_slug($category->name);
        $category->bg_color = $request['bg-color'];
        if ($request['status']== null){
            $category->status = 0;
        }else{
            $category->status = 1;
        }
        $category->description = $request['description'];

        $category->update();

        Toastr::success('Category Updated Successfully!','Done!');


        return redirect()->route('admin.blog-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
