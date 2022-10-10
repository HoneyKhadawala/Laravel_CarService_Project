<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\CityModel;	

class AdminUserController extends Controller
{
    public function loaduser()
    {
    	$userdata = UserModel::select("*")
    				->leftjoin("tbl_city","tbl_city.City_Id","=","tbl_user.City_Id")
    				->get();
    	return View('Admin-Side.User.users',compact("userdata"));
    }

    public function deleteUser(Request $request)
    {
    	$delete = $request->deleteid;
    	UserModel::where("User_ID","=",$delete)->delete();
    	// echo "delete";
    	return redirect("User")->with("status","Data Delete!");
    }
}
