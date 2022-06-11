<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\test;
use Illuminate\Support\Facades\DB;

class EldersController extends Controller
{
    public function insert(Request $request){
        $create=new test();
        $file= $request->file('img');
        $filename=$file->getClientOriginalName();
        $file-> move(public_path('img'), $filename);
        $file_store= $filename;
        $create-> img =$file_store; /// cloum name
        $create->save();
        return redirect('user');

    }
}
