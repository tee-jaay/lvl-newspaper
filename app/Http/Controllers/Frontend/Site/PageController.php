<?php

namespace App\Http\Controllers\Frontend\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function contact(Request $request){
//        dd($request->path());
        return view('frontend.pages.contact');
    }
}
