<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopServiceModel;
use App\Models\ServicesModel;
use Session;

class ShopkeeperServicesController extends Controller
{
    public function viewshopkeeperservices()
    {
    	// $servicedata = ServicesModel::all();
    	$pricedata = ShopServiceModel::select("*")
    				->where('Shop_Id','=','1')
    				->leftjoin('tbl_service','tbl_service.Service_Id','=','tbl_shopservice.Service_Id')
    				->get();
        
    	return view('Shopkeeper-Side.Services.viewservices',compact("pricedata"));
    }

    public function addshopkeeperservice()
    {
        $servicenamedata = ServicesModel::all();
    	return view('Shopkeeper-Side.Services.addservice',compact("servicenamedata"));
    }

     public function insertshopkeeperservice(Request $request)
    {   
        $ShopId=Session::get('Shop_Id');

    	$obj = new ShopServiceModel;
        $obj->Shop_Id =$ShopId;
    	$obj->Service_Id = $request->txtservicename;
        // $obj->description = $request->txtservicedesc;
        $obj->Price = $request->txtprice;
        $obj->ExtraCharge = $request->txtcharge;
        $obj->ExtraInfo = $request->txtinfo;
    	$obj->save();


        return redirect('/ShopkeeperSerices/add')->with("status","Data Inserted!");
    	// echo "insert";
        // echo $request->txtservicename, $request->txtservicedesc , $request->txtservicetype;
    }

     public function deleteshopkeeperservice(Request $request)
    {
        $delete = $request->deleteid;
        ShopServiceModel::where("ShopService_Id","=",$delete)->delete();
        return redirect('/ShopkeeperServices')->with("status","Data Deleted!");
        // echo "delete";
    }

    public function editshopkeeperservice($id)
    {
        $Services = ServicesModel::all();
    	$servicedata = ShopServiceModel::select("*")
    					->where("ShopService_Id","=",$id)
    					->get();
    	return view('Shopkeeper-Side.Services.editservice',compact("Services","servicedata"));
    }
}
