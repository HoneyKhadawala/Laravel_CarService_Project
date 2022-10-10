<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestimonialModel;
use App\Models\ShopModel;

class TestimonialsController extends Controller
{
    public function viewtestimonial()
    {
    	// echo "Created";
    	$testimonialdata = TestimonialModel::all();
        $shopdata=ShopModel::all();
    	return View('Admin-Side.Testimonials.viewtestimonials',compact("testimonialdata","shopdata"));
    }

    public function addtestimonial()
    {
    	// echo "Created";
        $Shopdata = ShopModel::all();
    	return View('Admin-Side.Testimonials.addtestimonials',compact("Shopdata"));
    }

    public function insertTestimonial(Request $request)
    {
    	//Upload Image
    	$image = $request->testimonialprofilepic;
    	$ext= $image->getClientOriginalExtension();
    	$newname = time().rand(1111,9999).".".$ext;
    	$image->move("uploads/Testimonial",$newname);

    	//Upload Image

    	$obj = new TestimonialModel;
    	$obj->Testimonial_name = $request->txttestimonialname;
    	$obj->Testimonial_Contact_No = $request->txttestimonialnum;
    	$obj->Designation = $request->txttestimonialdesign;
    	$obj->Testimonial_Profile_Pic = $newname;
    	$obj->Testimonial_text = $request->texttestimonial;
    	$obj->IsDisplay = $request->testimonialisdisplay;

    	$obj->save();

    	// echo "inserted";
    	return redirect('/Testimonial/add')->with("status","Data Inserted!");
    }

    public function deletetestimonial(Request $request)
    {
    	$delete = $request->deleteid;
    	TestimonialModel::where("Testimonial_Id","=",$delete)->delete();
    	return redirect('/Testimonial/view')->with("status","Data Deleted!");
    }

    public function edittestimonial($id)
    {
        $testimonialdata = TestimonialModel::select("*")
                           ->where("Testimonial_Id","=",$id)
                           ->get();
        $editshopdata = ShopModel::all();
        // echo "Created";
        return View('Admin-Side.Testimonials.edittestimonials',compact("testimonialdata","editshopdata"));
    }

    public function updatettestimonial(Request $request)
    {
        if($request->hasFile('testimonialprofilepic'))
        {
            //Upload Image
            $image = $request->testimonialprofilepic;
            $ext= $image->getClientOriginalExtension();
            $newname = time().rand(1111,9999).".".$ext;
            $image->move("uploads/Testimonial",$newname);

            //Upload Image
        }
        else
        {
            $newname = $request->oldimg;
        }

        $obj = TestimonialModel::where("Testimonial_Id","=",$request->id)->first();
        $obj->Testimonial_name = $request->txttestimonialname;
        $obj->Testimonial_Contact_No = $request->txttestimonialnum;
        $obj->Designation = $request->txttestimonialdesign;
        $obj->Testimonial_Profile_Pic = $newname;
        $obj->Testimonial_text = $request->texttestimonial;
        $obj->IsDisplay = $request->testimonialisdisplay;

        $obj->save();

        // echo "inserted";
        return redirect('/Testimonial/view')->with("status","Data Updated!");
    }
}
