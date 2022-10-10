<?php

namespace App\Http\Controllers;
use App\Models\AdminModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loadlogin()
    {
    	//echo "load login";
    	return View('Admin-Side.AdminLogin.login');
    }
    public function logout(Request $request)
    {
    	$request->session()->put('islogin','no');
		$request->session()->put('Admin_Id',"");
		$request->session()->put('Name',"");
		$request->session()->put('User_Type',"");
		$request->session()->put('Profile_pic',"");
		return redirect('/Login');
    }
    public function checklogin(Request $request)
    {
    	$data = AdminModel::select("*")
					->where("UserAdmin_name","=",$request->username)
					->where("Password","=",$request->userpassword)
					->get();

		if(count($data)<=0)
		{
			return redirect('/Login')->with("status","Username or Password not found");
		}
		else
		{
			foreach($data as $item)
			{
				 $request->session()->put('islogin','yes');
				 $request->session()->put('Admin_Id',$item->Admin_Id);
				 $request->session()->put('Name',$item->Name);
				 $request->session()->put('User_Type',$item->User_Type);
				 $request->session()->put('Profile_pic',$item->Profile_pic);
			}
			return redirect('/Dashboard');
		}
    }
}
 