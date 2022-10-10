<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopModel;
use App\Models\CityModel;

class ShopkeeperRegistrationController extends Controller
{
    public function viewregistration()
    {
    	$citydata = CityModel::all();
    	return View('Shopkeeper-Side.Registration.viewregiform',compact("citydata")); 
    }

    public function insertshopkeeper(Request $request)
    {
    	$obj = new ShopModel;
    	$obj->Shop_name = $request->shopname;
    	$obj->Shop_OwnerName = $request->ShopKeepername;
    	$obj->Email_Id = $request->shopkeeperemail;
    	$obj->Contact_No = $request->shopkeepercontact;
    	$obj->Shopkeeper_User_name = $request->shopkeeperusername;
    	$obj->password = $request->shopkeeperpassword;
    	$obj->Address = $request->shopkeeperaddress;
    	$obj->Address2 = $request->shopkeeperaddress2;
    	$obj->City_Id = $request->txtcity;
    	$obj->landmark = $request->txtlandmark;
    	$obj->pincode = $request->txtpincode;
    	$obj->About_Shop = $request->txtaboutshop;
    	$obj->Shop_logo = $request->txtshopllogo;
    	$obj->Shop_proof = $request->txtshopproof;
    	$obj->Shop_Image = $request->txtshopphoto;

    	$obj->save();
    	// echo $request->shopname;
    	return redirect('/ShopkeeperRegistration')->with("status","Successfully Registrationed Please Login!");
    }
}
