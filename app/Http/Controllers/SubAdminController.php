<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;

class SubAdminController extends Controller
{
    public function viewsubadmin()
    {
    	$admindata = AdminModel::all();
    	return View('Admin-Side.Sub-Admin.subadmin', compact("admindata"));
    }
    public function addsubadmin()
    {
    	return View('Admin-Side.Sub-Admin.addsubadmin');
    }
    public function insertSubAdmin(Request $request)
    {
        // upload image
        $image = $request->uploadfile;
        $ext = $image->getClientOriginalExtension();
        $newname = time().rand(1111,9999).".".$ext;
        $image->move("uploads/Sub-Admin",$newname);
        // upload image


    	$obj= new AdminModel;
        $obj->Name = $request->txtadminname;
        $obj->Contact_No = $request->txtnum;
    	$obj->User_name = $request->txtusername;
        $obj->Password = $request->txtpassword;
        $obj->Email_id=$request->txtmail;
        $obj->User_Type = $request->UserType;
        $obj->IsBlock = $request->UserBlock; 
        $obj->Profile_pic= $newname;
    	$obj->save();

    	// echo 'obj';
    	return redirect('/SubAdmin/add')->with("status","Data Insert!");
    }

    public function deleteSubAdmin(Request $request)
    {
        $delete= $request->deleteid;
        AdminModel::where("Admin_Id","=",$delete)->delete();
        // echo "string";
        return redirect('/SubAdmin/view')->with("status","Data Deleted!");
    }

    public function editsubadmin($id)
    {
        $admindata = AdminModel::select("*")
                     ->where("Admin_Id","=",$id)
                     ->get();
        return View('Admin-Side.Sub-Admin.editsubadmin',compact("admindata"));
    }

    public function updateSubAdmin(Request $request)
    {
        // Replaceing image
        if($request->hasFile('uploadfile'))
        {
             // upload image
            $image = $request->uploadfile;
            $ext = $image->getClientOriginalExtension();
            $newname = time().rand(1111,9999).".".$ext;
            $image->move("uploads/Sub-Admin",$newname);
            // upload image
        }
        else
        {
             $newname = $request->oldimg;
        }
       // Replaceing image


        $obj=AdminModel::where('Admin_Id',"=",$request->id)->first();
        $obj->Name = $request->txtadminname;
        $obj->Contact_No = $request->txtnum;
        $obj->User_name = $request->txtusername;
        $obj->Password = $request->txtpassword;
        $obj->Email_id=$request->txtmail;
        $obj->User_Type = $request->UserType;
        $obj->IsBlock = $request->UserBlock; 
        $obj->Profile_pic= $newname;
        $obj->save();

        // echo 'obj';
        return redirect('/SubAdmin/view')->with("status","Data Updated!");
    }

}
