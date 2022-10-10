<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\OrderModel;
use App\Models\CityModel;
use App\Models\ModelsModel;
use App\Models\ShopModel;

class OrderController extends Controller
{
   public function loadorder()
   {
		$orderdata = OrderModel::select("*")
					->leftjoin("tbl_user","tbl_user.User_ID","=","tbl_order.User_ID")
					->leftjoin("tbl_city","tbl_city.City_Id","=","tbl_order.City_Id")
					->leftjoin("tbl_model","tbl_model.Model_Id","=","tbl_order.Model_Id")
					->leftjoin("tbl_shop","tbl_shop.Shop_Id","=","tbl_order.Shop_Id")
					->get();
   		return View('Admin-Side.Order.order',compact("orderdata"));
   }

   public function deleteorder(Request $request)
	{
		$delete= $request->deleteid;
		OrderModel::where("Order_Id","=",$delete)->delete();
		return redirect('/Order')->with("status","Data Deleted!");

	}
}
