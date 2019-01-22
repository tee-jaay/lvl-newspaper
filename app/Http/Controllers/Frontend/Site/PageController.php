<?php

namespace App\Http\Controllers\Frontend\Site;

use App\Models\Site\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function contact(Request $request){
//        dd($request->path());
        $contactInfo = About::all()->first();
        return view('frontend.pages.contact', compact('contactInfo'));
    }
}
