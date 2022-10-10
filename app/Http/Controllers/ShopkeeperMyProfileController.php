<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopModel;
use App\Models\CityModel;
use Session;

class ShopkeeperMyProfileController extends Controller
{
    public function viewshopkeeperprofile()
    {
        $id = Session::get('Shop_Id');
    	$shopdata = ShopModel::select("*")
                    ->where("Shop_Id",$id)
                    // ->leftjoin("tbl_city","tbl_city.City_Id","=","tbl_shop.City_Id")
                    ->get();
        $citydata = CityModel::all();            
    	return view('Shopkeeper-Side.My-Profile.viewshopkeeperprofile',compact("shopdata","citydata"));
    }

    public function editprofile(Request $request)
    {
        $id = $request->id;
        $obj = ShopModel::find($id)->get();
    	if($request->hasFile('txtshoplogo'))
        {
            // Uplaod Proof Image
            $shoplogo=$request->txtshoplogo;
            $ext = $shoplogo->getClientOriginalExtension();
            $newlogoname = time().rand(1111,9999).".".$ext;
            $img->move("uploads/shop/logo",$newlogoname);
            // Uplaod Proof Image
        }
        else
        {
            $newlogoname = $request->logoimg;
        }

    	if($request->hasFile('txtshopproof'))
        {
            // Uplaod Proof Image
            $shopproof=$request->txtuserprofile;
            $ext = $shopproof->getClientOriginalExtension();
            $newproofname = time().rand(1111,9999).".".$ext;
            $img->move("uploads/shop/proof",$newproofname);
            // Uplaod Proof Image
        }
        else
        {
            $newproofname = $request->proofimg;
        }

    	if($request->hasFile('txtshopphoto'))
        {
            // Uplaod Proof Image
            $shopimg=$request->txtuserprofile;
            $ext = $shopimg->getClientOriginalExtension();
            $newshopphotoname = time().rand(1111,9999).".".$ext;
            $img->move("uploads/shop/photo",$newshopphotoname);
            // Uplaod Proof Image
        }
        else
        {
            $newshopphotoname = $request->shopimg;
        }

    	
    	$obj->Shop_name = $request->shopname ;
    	$obj->Shop_OwnerName = $request->shopkeepername ;
    	$obj->Shopkeeper_User_name = $request->shopkeeperusername ;
    	$obj->Contact_No = $request->shopkeeperphone ;
    	$obj->Email_Id = $request->shopkeeperemail ;
    	$obj->Address = $request->shopkeeperaddress ;
    	$obj->Address2 = $request->shopkeeperextraaddress ;
    	$obj->City_Id = $request->txtcity ;
    	$obj->landmark = $request->shopkeeperlandmark ;
    	$obj->pincode = $request->landmarkpincode ;
    	$obj->About_Shop = $request->aboutshop;
        $obj->Shop_proof = $newproofname;
        $obj->Shop_Image = $newshopphotoname;
        $obj->Shop_logo = $newlogoname ;

    	$obj->save();

    	// echo $request->shopname;

    	return redirect('/ShopkeeperProfile')->with("status","Data Updated!");

    }
}
