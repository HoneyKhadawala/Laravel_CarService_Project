<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderModel;
use App\Models\DetailsModel;


class ShopkeeperCompleteOrderController extends Controller
{
    public function viewcompleteorder()
	{
		$orderdata = OrderModel::select("*")
					 ->leftjoin("tbl_model","tbl_model.Model_Id","=","tbl_order.Model_Id")
					 ->leftjoin("tbl_user","tbl_user.User_ID","=","tbl_order.User_ID")
					 ->where("Status","=","complete")
					 ->get();

		return view("ShopKeeper-Side.Complete_Order.viewcompleteorder",compact("orderdata"));
    }

    public function viewdetailcompleteorder($id)
    {
    	$detail = OrderModel::select("*")
					 ->leftjoin("tbl_model","tbl_model.Model_Id","=","tbl_order.Model_Id")
					 ->leftjoin("tbl_user","tbl_user.User_ID","=","tbl_order.User_ID")
					 ->where("Status","=","complete")
					 ->get();
    	return view("ShopKeeper-Side.Complete_Order.viewdetailcompleteorder",compact("detail"));
    }
}
