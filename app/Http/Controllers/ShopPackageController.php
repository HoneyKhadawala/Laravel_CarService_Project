<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopPackageModel; 
use App\Models\ShopModel;
use App\Models\PackageModel;

class ShopPackageController extends Controller
{
   public function viewshoppackage()
    {
    	$shoppackage = ShopPackageModel::select("*")
    				->leftjoin("tbl_shop","tbl_shop.Shop_Id","=","tb_shoppackage.Shop_Id")
    				->leftjoin("tbl_package","tbl_package.Package_Id","=","tb_shoppackage.Package_Id")
    				->get();
    	return View('Admin-Side.Shop-Package.viewshoppackage',compact("shoppackage"));	
    }
    public function addshoppackage()
    {
    	$shopdata = ShopModel::all();
    	$packagedata = PackageModel::all();
    	return View('Admin-Side.Shop-Package.addshoppackage',compact("shopdata","packagedata"));	
    }
    public function insertShopPackage(Request $request)   
    {
    	$obj = new ShopPackageModel;
    	$obj->Shop_Id = $request->txtshopid;
    	$obj->Package_Id = $request->txtpackageid;
    	$obj->Start_Date = $request->txtstartdate;
    	$obj->End_Date = $request->txtenddate;
    	$obj->PayMode = $request->paymode;
    	$obj->IsPay = $request->ispay;
    	$obj->Transcation_number = $request->txttranscationno;
    	$obj->save();

    	// echo "Inserted";
    	return redirect("/ShopPackage/add")->with("status","Data Inserted!");
    }

    public function deleteShopPackage(Request $request)
    {
        $delete= $request->deleteid;
        ShopPackageModel::where("ShopPackage_Id","=",$delete)->delete();
        return redirect('/ShopPackage/view')->with("status","Data Deleted!");
    }

    public function editshoppackage($id)
    {

        $shoppackage = ShopPackageModel::select("*")
                       ->where("ShopPackage_Id","=",$id)
                       ->get();
        $shopdata = ShopModel::all();
        $packagedata = PackageModel::all();
        return View('Admin-Side.Shop-Package.editshoppackage',compact("shoppackage","packagedata","shopdata"));  
    }

    public function updateshoppackage(Request $request)
    {
        $obj = ShopPackageModel::where("ShopPackage_Id","=",$request->id)->first();
        $obj->Shop_Id = $request->txtshopid;
        $obj->Package_Id = $request->txtpackageid;
        $obj->Start_Date = $request->txtstartdate;
        $obj->End_Date = $request->txtenddate;
        $obj->PayMode = $request->paymode;
        $obj->IsPay = $request->ispay;
        $obj->Transcation_number = $request->txttranscationno;
        $obj->save();

        // echo "updated";
        return redirect('/ShopPackage/view')->with("status","Data Updated!");
    }
}