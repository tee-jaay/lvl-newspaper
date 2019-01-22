<?php

namespace App\Http\Controllers\Frontend\Site;

use App\Models\Site\Contact;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required'
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->website=$request->website;
        $contact->subject=$request->subject;
        $contact->message=$request->message;
        $contact->save();

        Toastr::success('Your message has been sent.','Success!');

        return redirect()->back();
    }
}
