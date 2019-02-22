<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Border;
use DB;
use PDF;
class paymentController extends Controller
{
    public function paymentMake()
    {
        $borderData = Border::all();
    	return view('admin.pages.paymentMake',compact('borderData'));
    }


    public function paymentConfirn($seat)
    {
    	//$borderByid = Border::where('id',$id)->first();

       $borderByid = DB::table('borders')->where('seatNo', $seat)->first();

       $seatByid = DB::table('seats')->where('seatNo', $seat)->first();

       // $borderByid = DB::table('borders')
       //  ->join('seats', function ($join) {
       //      $join->on('borders.seatNo', '=', 'seats.seatNo')
       //           ->where('borders.id', '=', 1);
       //  })
       //  ->get();



        // $borderByid = DB::table('borders')
        //     ->join('seats', 'borders.seatNo', '=', 'seats.seatNo')
    
        //     ->select('borders.*', 'seats.rent')
        //     ->get();


    	return view('admin.pages.paymentConfirm',compact('borderByid','seatByid'));
    }


    public function paymentsuccessfull(Request $request)
    {
        //return $request->all();
      
      //insert by quiry bulder
      DB::table('border_pay_lists')->insert([
        'name'=> $request->name,
        'roomNo'=> $request->roomNo,
        'seatNo'=> $request->seatNo,
        'phone'=> $request->phone,
        'rent'=> $request->rent,
        'month'=> $request->month,
        'year'=> $request->year,
        'fine'=> $request->fine,
 
]);


      $seat = $request->seatNo;

       $borderByid = DB::table('borders')->where('seatNo', $seat)->first();

       $seatByid = DB::table('seats')->where('seatNo', $seat)->first();

      return view('admin.pages.paymentSuccessfull',compact('seat'));
      
    }




    //print
    public function paymentPrint($seat)
    {
      $borderData = DB::table('borders')->where('seatNo', $seat)->first();

      $pdf = PDF::loadView('admin.pages.payslipPrint',compact('borderData'));
      
    return  $pdf->stream("payslip.pdf", array("Attachment" => false));

     exit(0);

    }

    public function print()
    {
      return view('admin.pages.payslipPrint');
    }
}
