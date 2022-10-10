<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PriceModel;
use App\Models\CityModel;
use App\Models\ModelsModel;

class PriceController extends Controller
{
    public function viewprice()
    {
    	$pricedata = PriceModel::select("*")
    				 ->leftjoin("tbl_city","tbl_city.City_Id","=","tbl_price.City_Id")
    				 ->leftjoin("tbl_model","tbl_model.Model_Id","=","tbl_price.Model_Id")
    				 ->get();
    	return view("Admin-Side.Price.viewprice",compact("pricedata"));
    }

    public function addprice()
    {
    	$citydata = CityModel::all();
    	$modeldata  = ModelsModel::all();
    	return view("Admin-Side.Price.addprice",compact("citydata","modeldata"));
    }

    public function insertprice(Request $request)
    {
    	$obj = new PriceModel;
    	$obj->City_Id = $request->txtcityselect;
    	$obj->Model_Id = $request->txtmodelselect;
    	$obj->Onroad_Price = $request->txtonroadprice;

    	$obj->save();

    	// echo "string";
    	return redirect("/Prices/add")->with("status","Data Inserted!");
    }

    public function deleteprice(Request $request)
    {
    	$delete = $request->deleteid;
    	PriceModel::where("Price_Id","=",$delete)->delete();

    	// echo "delete";
    	return redirect("/Prices/view")->with("status","Data Deleted!");
    }

    public function editprice($id)
    {

    	$editcitydata = CityModel::all();
    	$editmodeldata  = ModelsModel::all();
    	$editpricedata = PriceModel::select("*")
    					 ->where("Price_Id","=",$id)
    					 ->get();
    	return view("Admin-Side.Price.editprice",compact("editcitydata","editmodeldata","editpricedata"));
    }

    public function updateprice(Request $request)
    {

    	$obj = PriceModel::where("Price_Id","=",$request->id)->first();
    	$obj->City_Id = $request->txtcityselect;
    	$obj->Model_Id = $request->txtmodelselect;
    	$obj->Onroad_Price = $request->txtonroadprice;

    	$obj->save();

    	// echo "string";
    	return redirect("/Prices/view")->with("status","Data Updated!");
    }
}
