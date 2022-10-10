<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\CityModel;

class userloginController extends Controller
{
    public function viewlogin()
    {
        $citydata = CityModel::all();
    	return view('Front-Side.Login.login',compact("citydata"));
    }
    public function Logout(Request $request)
    {
    	$request->session()->put('islogin','no');
    	$request->session()->put('User_ID',"");
    	$request->session()->put('User_Profile',"");
    	$request->session()->put('User_name',"");
    	// $request->session()->put('Contact_No',"");
    	return redirect("/UserLogin");
    }

    public function checkuserlogin(Request $request)
    {
    	// echo $request->textemail, $request->textpassword;    	

    	$data = UserModel::select("*")
    			->where("Email_id","=",$request->textemail)
    			->where("password","=",$request->textpassword)
                ->where("IsVerify","=",'yes')
    			->get();
    			// echo count($data);
    	if(count($data)<=0)
    	{
    		return redirect('/UserLogin')->with("status","Email or Password not found");
    	}
    	else
    	{
    		foreach ($data as $item)
    		{
    			$request->session()->put('islogin','yes');
				$request->session()->put('User_ID',$item->User_ID);
				$request->session()->put('User_Profile',$item->User_Profile);
				$request->session()->put('User_name',$item->User_name);
				$request->session()->put('Contact_No',$item->Contact_No);
				$request->session()->put('City_Id',$item->City_Id);
				// $request->session()->put('password',$item->password);
				  $request->session()->put('Email_id',$item->Email_id);
				//echo $item->Email_id;
    		}
    		return redirect("/index");
    	}
    }        
}
