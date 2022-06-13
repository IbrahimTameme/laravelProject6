<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contacts;

class contact extends Controller


{
    public function contact()
{
    $view = Contacts::all();
    return view('layouts.contactus',compact('view'));
}

public function viewadd()
{
    return view('layouts.contactus');
}


public function contacts(Request $request){
    $create=new Contacts();
    $create->name=$request->input('name');
    $create->email=$request->input('email');
    $create->subject=$request->input('subject');
    $create->message=$request->input('message');
    $create->save();
    return redirect('contact')->with('message','The data has been added successfully');
 }
}






























