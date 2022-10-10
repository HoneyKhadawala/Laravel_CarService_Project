<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopServiceModel;
use App\Models\ShopModel;
use App\Models\ServicesModel;

class ShopServiceController extends Controller
{
    public function viewshopservices()
    {
    	$shopservicedata = ShopServiceModel::select("*")
                            ->leftjoin("tbl_shop","tbl_shop.Shop_Id","=","tbl_shopservice.Shop_Id")
                            ->leftjoin("tbl_service","tbl_service.Service_Id","=","tbl_shopservice.Service_Id")
                            ->get();
    	return View('Admin-Side.ShopService.viewshopservice',compact("shopservicedata"));
    }
    public function addshopservices()
    {
        $shopdata = ShopModel::all();
        $servicedata = ServicesModel::all();
    	return View('Admin-Side.ShopService.addshopservice',compact("shopdata","servicedata"));
    }
    public function insertShopService(Request $request)
    {
    	$obj= new ShopServiceModel;
    	$obj->Shop_Id = $request->txtshopname;
    	$obj->Service_Id =$request->txtservicename;
    	$obj->Price=$request->txtprice;
    	$obj->ExtraCharge=$request->txtcharge;
    	$obj->ExtraInfo	=$request->txtinfo;
    	$obj->save();

    	// echo "insert";
    	// echo $request->txtprice;
    	return redirect('/ShopService/add')->with("status","Data Inserted!");

    }

    public function deleteShopService(Request $request)
    {
        $delete = $request->deleteid;
        ShopServiceModel::where("ShopService_Id","=",$delete)->delete();
        return redirect('/ShopService/view')->with("status","Data Deleted!");
    }

    public function editshopservices($id)
    {
        $shopdata = ShopModel::all();
        $servicedata = ServicesModel::all();
        $shopservice = ShopServiceModel::select("*")
                       ->where("ShopService_Id","=",$id)
                       ->get();
        return View('Admin-Side.ShopService.editshopservice',compact("shopdata","servicedata","shopservice"));
    }

    public function updateshopservice(Request $request)
    {
        $obj = ShopServiceModel::where("ShopService_Id","=",$request->id)->first();
        $obj->Shop_Id = $request->txtshopname;
        $obj->Service_Id =$request->txtservicename;
        $obj->Price=$request->txtprice;
        $obj->ExtraCharge=$request->txtcharge;
        $obj->ExtraInfo =$request->txtinfo;
        $obj->save();

        return redirect('/ShopService/view')->with("status","Data Updated!");
    }
}
