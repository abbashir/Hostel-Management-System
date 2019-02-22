<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seat;
class seatController extends Controller
{
    public function seatFunc()
    {
    	$seatinfo = Seat::paginate(5);
    	return view('admin.pages.seatAdd',compact('seatinfo'));
    }


    public function storeSeat(Request $request)
    {
    	$seat = new Seat();
    	//return $request->all();
    	$seat->roomNo = $request->roomNo;
    	$seat->seatNo = $request->seatNo;
    	$seat->rent = $request->rent;

    	$seat->save();
    	 return redirect('/seat')->with('message','Seat add has been successfull.');

    }

    public function editSeat($id)
    {
    	$seatByid = Seat::where('id',$id)->first();
    	return view('admin.pages.seatUpdate',compact('seatByid'));
    }

//update query perform
    public function updateSeat(Request $request)
    {
    	$seat = Seat::find($request->seatId);

    	$seat->roomNo = $request->roomNo;
    	$seat->seatNo = $request->seatNo;
    	$seat->rent = $request->rent;
        
        $seat->save();
         return redirect('/seat')->with('message','Seat update has been successfull.');

    
    }


    public function deleteSeat($id)
    {
    	$seat = Seat::find($id);
        $seat->delete();
        return redirect('/seat')->with('message','Seat delete has been successfull.');
    }
}
