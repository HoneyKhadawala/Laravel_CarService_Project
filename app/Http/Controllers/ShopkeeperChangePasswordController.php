<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ShopModel;
use Session;

class ShopkeeperChangePasswordController extends Controller
{
    public function viewchangepassword(Request $request)
    {
    	$id=Session::get('Shop_Id');
    	$pass = ShopModel::where("Shop_Id","=",$id)->get();
    	return view("Shopkeeper-Side.ChangePassword.viewchangepassword", compact("pass"));
    }	

    public function updatepassword(Request $request)
	{	
		$id=Session::get('Shop_Id');

		$obj = ShopModel::find($id);
		$obj->password = $request->shopchangepass;
		$obj->save();
		// echo $request->shopchangepass; 
		return redirect("/ShopkeeperChangePassword")->with("status","Updated!");
	}
}
