<?php

namespace App\Http\Controllers\Frontend\Blog;

use App\Models\Blog\Subscriber;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriberController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'email'=>'required|email|unique:subscribers'
        ]);
        $subsciber = new Subscriber();
        $subsciber->email = $request->email;
        $subsciber->save();

        Toastr::success('Your email has been successfully added to our subscribers list','Success!');

        return redirect()->back();
    }
}
