<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\requests;
use App\Models\elders;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class TestController extends Controller
{


  public function user()
{  $id = auth()->user()->id;
    // $data = ['LoggedUserInfo'=>User::select('id','name','last_name')->where('id' , '=' ,  $id)->first()];
 

    return view('user/id/'.$id);
}

public function viewsign(){
  return view('sign');
}




// public function editUser(){
//   $id = Auth::user()->id;
//   $update = DB::select('select * from user where id = ?', [$id]);
//   return view('layout.updateElder',compact('update'));
// }

public function updateuser(Request $request)
{
  $id = Auth::user()->id;
  
  $name=$request->input('name');
  $lname=$request->input('lname');
  $phone=$request->input('phone');
  $email=$request->input('email');
  DB::update('update users set name = ? ,lname = ? , phone=?, email=? where id = ?', [$name,$lname,$phone,$email,$id]);
  return redirect('/home')->with('message','The data has been updated successfully');

}


  public function editPic(Request $request){
   $id = Auth::user()->id;
    $data = User::find($id);
    $file= $request->file('img');
    $filename=$file->getClientOriginalName();
    $file-> move(public_path('img'), $filename);
    $file_store= $filename;
    $data-> img =$file_store; /// cloum name
    $data->update();
    return redirect('home');


  }


  public function insert_request(Request $request){
    $create=new elders();
    $create->name=$request->input('name');
    $create->age=$request->input('age');
    $create->phone_num=$request->input('phone_num');
    $create->needed_services=$request->input('needed_services');
    $create->time_needed=$request->input('time_needed');
    $create->gender=$request->input('gender');
    $create->location=$request->input('location');
    $create->guardian_name=$request->input('guardian_name');
    $create->guardian_number=$request->input('guardian_number');
    $create->guardian_relation=$request->input('guardian_relation');
    $create->guardian_id_pic=$request->input('guardian_id_pic');
  
    $create->save();
    return redirect('signup')->with('message','The data has been added successfully');
  }


  public function show_request()
{

$view2 = requests::all();
return view('show_request',compact('view2'));

}
public function request()
{


return view('request');

}



//   public function insert_user(Request $request){
    
//     $request->validate([
//       'name'=>'required|alpha',
//       'lname'=>'required|alpha',
//       'email'=>'required|email',
//       'password'=>'required|min:8',
//       'phone'=>'numeric|digits_between:9,11',
//       'age'=>'required', 'before:13 years ago',
//       'password_confirmation' => 'required_with:password|same:password|min:8',
     

//   ]);
//     $create=new User();
//     $create->name=$request->input('name');
//     $create->lname=$request->input('lname');
//     $create->phone=$request->input('phone');
//     $create->email=$request->input('email');
//     $create->password=$request->input('password');
//     $create->gender=$request->input('gender');
//     $create->age=$request->input('age');
//     $create->front_id_pic=$request->input('front_id_pic');
//     $create->back_id_pic=$request->input('back_id_pic');
//     $create->needed_services=$request->input('needed_services');
//     $create->time=$request->input('time');
//     $create->timeTo=$request->input('timeTo');
//     $create->car=$request->input('car');
//     $create->save();

   

//     return view('login')->with('messageRej','The data has been registration successfully');

//     // return redirect('signup')->with('message','The data has been added successfully');
//  }

//  public function form_validate(Request $request){
//   $request->validate([
//       'name'=>'required|alpha',
//       'lname'=>'required|alpha',
//       'email'=>'required|email',
//       'password'=>'required|min:8',
//       'phone'=>'numeric|digits_between:9,11',
//       'age'=>'required', 'before:13 years ago',
//       'password_confirmation' => 'required_with:password|same:password|min:8',
     

//   ]);

//   return 
//   redirect()->action('App\Http\Controllers\TestController@insert_user');
//   // redirect()->action('TestController::class, insert_user');


// }

}

