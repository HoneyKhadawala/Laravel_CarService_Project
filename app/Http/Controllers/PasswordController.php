<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use Session;

class PasswordController extends Controller
{
	public function changeadminpassword(Request $request)
	{
		$id = Session::get('Admin_Id');
		$passdata = AdminModel::where("Admin_Id","=",$id)->get();
		return view("Admin-Side.ChangePassword.viewpassword",compact("passdata"));
	}

	public function updateadminpassword(Request $request)
	{	
		$id=Session::get('Admin_Id');

		$obj = AdminModel::find($id);
		$obj->Password = $request->newpass;
		$obj->save();

		return redirect("/ChangePassword")->with("Status","Updated!");
	}


}
