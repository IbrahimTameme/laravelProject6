<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
  public function editPic($id){
    $data = User::find($id);
    $file= $request->file('img');
    $filename=$file->getClientOriginalName();
    $file-> move(public_path('img'), $filename);
    $file_store= $filename;
    $create-> img =$file_store; /// cloum name
    $create->update();
    return redirect('user');


  }

  public function insert_user(Request $request){
    $create=new User();
    $create->name=$request->input('name');
    $create->email=$request->input('email');
    $create->password=$request->input('password');
    $create->gender=$request->input('gender');
    $create->age=$request->input('age');
    $create->front_id_pic=$request->input('front_id_pic');
    $create->back_id_pic=$request->input('back_id_pic');
    $create->needed_services=$request->input('needed_services');
    $create->time=$request->input('time');
    $create->car=$request->input('car');
    $create->save();
    return redirect('signup')->with('message','The data has been added successfully');
 }
}
