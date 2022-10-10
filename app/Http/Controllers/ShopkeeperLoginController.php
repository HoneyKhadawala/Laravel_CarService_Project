<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CityModel;
use App\Models\ShopModel;


class ShopkeeperLoginController extends Controller
{
    public function viewloginform()
    {
    	$citydata = CityModel::ALL();
    	return View('ShopKeeper-Side.Login.viewlogin',compact("citydata"));
    }

    public function checkshopkeeperlogin(Request $request)
    {
    	// echo $request->txtshopkeeperusername, $request->txtshopkeeperpass;
    	$logindata = ShopModel::select("*")
    				 ->where("Shopkeeper_User_name","=",$request->txtshopkeeperusername)
    				 ->where("password","=",$request->txtshopkeeperpass)
    				 ->get();

    	echo count($logindata);
    	if(count($logindata)<=0)
    	{
    		return redirect("/ShopkeeperLogin")->with("status","User Name or Password not found");
    	}
    	else
    	{
    		foreach ($logindata as $item) 
    		{
	    		$request->session()->put('islogin','yes');
				$request->session()->put('Shop_Id',$item->Shop_Id);
				$request->session()->put('Shop_name',$item->Shop_name);
				$request->session()->put('Shop_OwnerName',$item->Shop_OwnerName);
				$request->session()->put('Contact_No',$item->Contact_No);
				$request->session()->put('City_Id',$item->City_Id);
				// $request->session()->put('password',$item->password);
                
                $request->session()->put('Shopkeeper_User_name',$item->Shopkeeper_User_name);
				$request->session()->put('Email_Id',$item->Email_Id);
				$request->session()->put('Address',$item->Address);
				$request->session()->put('Address2',$item->Address2);
				$request->session()->put('landmark',$item->landmark);
				$request->session()->put('pincode',$item->pincode);
                $request->session()->put('About_Shop',$item->About_Shop);
				$request->session()->put('Shop_proof',$item->Shop_proof);
				$request->session()->put('Shop_Image',$item->Shop_Image);
				$request->session()->put('Shop_logo',$item->Shop_logo);
			}
			
    		// echo "welcome";
    		return redirect("/ShopkeeperDashboard");
    	}
    }

    public function logoutshopkeeper(Request $request)
    {
        $request->session()->put("login","no");
        $request->session()->put('Shop_Id',"");
        $request->session()->put('Shop_name',"");
        $request->session()->put('Shopkeeper_User_name',"");

        return redirect("/ShopkeeperLogin");
    }
}
