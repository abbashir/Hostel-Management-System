<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Border;
use App\Seat;

class borderController extends Controller
{
    public function addBorderfunc()
    {
        $SeatData = Seat::all();
    	 return view('admin.pages.borderAdd',compact('SeatData'));

    }



    public function storeBorderData(Request $request)
    {
    	$border = new Border();
    	 //return $request->all();

    	 $border->roomNo = $request->rooNumber;
         $border->seatNo = $request->seatNo;
    	 $border->name = $request->Name;
    	 $border->fName = $request->fName;
    	 $border->mName = $request->mName;
    	 $border->institute = $request->Institute;
    	 $border->bDay = $request->birthDay;
    	 $border->NID = $request->nidNo;
    	 $border->relegious = $request->Relegious;
    	 $border->phone = $request->phone;

     $border->save();	 
  return redirect('/border/add')->with('message','border add has been successfull.'); 

    }

//border table
    public function manageBorderData()
    {
    	$borderData = Border::all();
    	return view('admin.pages.borderManage',compact('borderData'));
    }

//edit border data
    public function editBorderData($id)
    {
    	$borderByid = Border::where('id',$id)->first();
    	return view('admin.pages.borderUpdate',compact('borderByid'));
    	
    }

//update perform
    public function UpdateBorderData(Request $request)
    {
    	 $border = Border::find($request->BorderId);

    	 $border->roomNo = $request->rooNumber;
    	 $border->name = $request->Name;
    	 $border->fName = $request->fName;
    	 $border->mName = $request->mName;
    	 $border->institute = $request->Institute;
    	 
    	 $border->NID = $request->nidNo;
    	 $border->relegious = $request->Relegious;
    	 $border->phone = $request->phone;

       $border->save();
        return redirect('/border/manage')->with('message','border Info update has been successfull.'); 
    	
    }

    //delete
    public function DeleteBorderData($id)
    {
    	$border = Border::find($id);
        $border->delete();

        return redirect('/border/manage')->with('message','Border info. delete has been successfull.');
    }
}
