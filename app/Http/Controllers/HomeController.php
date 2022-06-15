<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\elders;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        
        
        $id = auth()->user()->id;
// $data = elders::where('volunteer_id',$id);

$data = elders::where('volunteer_id', '=', $id)->first();

// $data = DB::table('elders')
// ->where('volunteer_id',$id)
// ->get();
if($data)
{
    return view('user',compact('data'));
}else
{
    return view('user');
}
        
    }


    // public function user(){
    //     return view('user');
    // }
}
