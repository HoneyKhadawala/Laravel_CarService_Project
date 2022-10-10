<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use Illuminate\Support\Facades\Auth;
use Session;
// use App\Models\CityModel;
// use App\Models\StateModel;

class AdminProfileController extends Controller
{   

    
    public function viewadminprofile()
    {
        $id=Session::get('Admin_Id');
    	$admindata= AdminModel::select("*")
                    ->where("Admin_Id", $id)
                    ->get();
    	return view('Admin-Side.My-Profile.viewadminprofile',compact("admindata"));
    }

    public function editadminprofile(Request $request)
    {
        $id = $request->id;
        $obj = AdminModel::find($id);
    	if($request->hasFile('txtadminprofile'))
        {
            // Uplaod new Profile Pic
            $pic=$request->txtadminprofile;
            $ext = $pic->getClientOriginalExtension();
            $newpicname = time().rand(1111,9999).".".$ext;
            $pic->move("uploads/Sub-Admin",$newpicname);
            // Uplaod Proof Image
        }
        else
        {
            $newpicname = $request->oldimg;
        }

    	
        $obj->UserAdmin_name = $request->adminusername;
        $obj->Name = $request->adminname;
        $obj->Admin_Contact_No = $request->adminphone;
        $obj->Admin_Email_id = $request->adminemail;
        $obj->Profile_pic = $newpicname;
        
        $obj->save();

        // echo $request->adminusername;

    	return redirect('/AdminProfile')->with("status","Data Updated!");
    }
} 
