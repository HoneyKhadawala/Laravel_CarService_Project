<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestimonialModel;
use App\Models\UserModel;
use App\Models\ShopModel;
use Session;

class UserTestimonialsController extends Controller
{
    public function viewtestimonial()
    {
    	$testi = TestimonialModel::all();
    	return view('Front-Side.Testimonials.viewtestimonials',compact("testi"));
    }

    public function viewfeedback()
    {
    	$testi = TestimonialModel::all();
    	return view('Front-Side.Testimonials.viewfeedback',compact("testi"));
    }

    public function interfeedback(Request $request)
    {
    	$userid = Session::get('User_ID');

    	$obj = new TestimonialModel;
    	$obj->Testimonial_name = $request->txtname; 
    	$obj->Testimonial_Contact_No = $request->txtContactNo;
        $obj->Designation = "Unknown";
        $obj->Testimonial_Profile_Pic = $request->TestimonialProfilePic;
    	$obj->Testimonial_text = $request->txtfeedbox;

    	$obj->save();

    	return redirect("/Feedback");
    }

}
