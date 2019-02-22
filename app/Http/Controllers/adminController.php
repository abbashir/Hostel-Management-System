<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class adminController extends Controller
{
    public function dashboardPage()
    {
    	$borders = DB::table('borders')->get();
    	$seats = DB::table('seats')->get();
    	$payList = DB::table('border_pay_lists')->get();

    	 return view('admin.dashboard',compact('borders','seats','payList'));
    	
    }
}
