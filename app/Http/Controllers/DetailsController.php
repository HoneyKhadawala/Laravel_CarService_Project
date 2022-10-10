<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderModel;
use App\Models\DetailsModel;
use App\Models\UserModel;
use App\Models\ShopServiceModel;

class DetailsController extends Controller
{
    public function loaddetail()
    {
    	$detaildata = DetailsModel::select("*")
					  ->leftjoin("tbl_order","tbl_order.Order_Id","=","tbl_details.Order_Id")
					  ->leftjoin("tbl_shopservice","tbl_shopservice.ShopService_Id","=","tbl_details.ShopService_Id")
					  ->get();
    	return View('Admin-Side.Details.details',compact("detaildata"));	
    }

    public function deletedetail(Request $request)
    {
    	$delete= $request->deleteid;
		DetailsModel::where("Detail_Id","=",$delete)->delete();
		return redirect('/Details')->with("status","Data Deleted!");
    }
}	