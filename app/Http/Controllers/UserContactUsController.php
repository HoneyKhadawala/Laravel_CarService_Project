<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUsModel;
use Session;

class UserContactUsController extends Controller
{
   public function viewcontactus()
   {
   		return view('Front-Side.ContactUs.ContactUs');
   }

   public function insertcontactus(Request $request)
   {
   		$obj = new ContactUsModel;
   		$obj->Feedback_name = $request->inqurename;
   		$obj->Feedback_no = $request->inqurenumber;
   		$obj->Feedback_email = $request->inqureemail;
   		$obj->Feedback_remark = $request->inqureremark;
   		$obj->Feedback_msg = $request->inquremsg;

   		// echo $request->inqurename;
   		$obj->save();
   		return redirect('/ContactUs')->with('status','Your inquire have been received');
   }
}
