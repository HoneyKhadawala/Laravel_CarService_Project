<?php

namespace App\Http\Controllers;
use App\Models\CityModel;
use App\Models\UserModel;
use Session;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function viewprofile()
    {
        $id = session::get('User_ID');
    	$userdata = UserModel::select("*")->where("User_ID","=",$id)->get();
    	$citydata = CityModel::all();
    	return view('Front-Side.My-Profile.viewuserprofile',compact("userdata","citydata"));
    }

    public function updateprofile(Request $request)
    {   
        $id=$request->id;
        $obj = UserModel::find($id);
    	if($request->hasFile('txtuserprofile'))
        {   
            // Uplaod Proof Image
            $img=$request->txtuserprofile;
            $ext = $img->getClientOriginalExtension();
            $newprofilename = time().rand(1111,9999).".".$ext;
            $img->move("UserUpload/MyProfile",$newprofilename);
            // Uplaod Proof Image
        }
        else
        {
            $newprofilename = $request->oldimg;
        }

        
        $obj->User_Profile = $newprofilename ;
        $obj->User_name = $request->editusername;
        $obj->Contact_No = $request->txtusercontactno;
        $obj->Email_id = $request->txtuseremail;
        $obj->City_Id = $request->txtcity;
        $obj->save();

        // echo $request->newprofilename;
        return redirect('/MyProfile')->with("status","Data Updated!");
    }
}
