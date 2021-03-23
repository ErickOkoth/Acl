<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Knox\AFT\AFT;
use App\Sms;



class SmsController extends Controller
{
    //

    public function sms(){
        return view('Sendsms');
    }
    public function sendsms(Request $request)
    {

        
       // return[ 'status'=>true, 'message'=>'message sent'];

        //$sms=create($request->all());
        $phone=$request->input('phone');
        $smss=$request->input('sms');
       // AFT::sendMessage(0798013452',$sms->complaints' );
      
       
       AFT::sendMessage($phone, $smss);
       $sms=Sms::create($request->all());
       $sms->save();
        return redirect()->back()->with('success', 'message sent');
      
       
    }

  //  public function resetpass($id)
   // {
       //   $kplc= Kplc::find($id);
   //     AFT::sendMessage($kplc->phone,'Kindly repay your Loan' );
       // return[ 'status'=>true, 'message'=>'message sent'];
   // }


  

   public function view(){
     $sm=Sms::all();
     return view('Smsview', compact('sm'));
   }
}
