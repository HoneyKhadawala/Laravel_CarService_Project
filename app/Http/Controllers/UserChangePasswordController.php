<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\UserModel;

class UserChangePasswordController extends Controller
{
    public function viewchangepassword()
    {
    	$id = session::get('User_ID');
    	$passdata = UserModel::where("User_ID","=",$id)->get();
    	return view('Front-Side.Change-Password.viewchangepassword',compact("passdata"));
    }

    public function updateuserpassword(Request $request)
    {
    	$id = session::get('User_ID');

    	$obj = UserModel::find($id);
		$obj->password = $request->usernewpass;
		$obj->save();

		return redirect("/UserChangePassword")->with("status","Updated!");
    }
}
