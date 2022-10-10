<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderModel;
use App\Models\CityModel;
use App\Models\UserModel;
use App\Models\DetailsModel;
use Mail;
use App\Mail\AcceptEmail; 

class ShopkeeperProcessingOrderController extends Controller
{
    public function viewprocessingorder()
	{
		$orderdata = OrderModel::select("*")
					 ->leftjoin("tbl_model","tbl_model.Model_Id","=","tbl_order.Model_Id")
					 ->leftjoin("tbl_user","tbl_user.User_ID","=","tbl_order.User_ID")
					 ->where("Status","=","process")
					 ->get();

		return view("ShopKeeper-Side.Process_Order.viewprocessorder",compact("orderdata"));
    }

    public function viewprocessdetailorder($id)
    {
    	$detail = OrderModel::select("*")
    			  ->leftjoin("tbl_model","tbl_model.Model_Id","=","tbl_order.Model_Id")
				  ->leftjoin("tbl_user","tbl_user.User_ID","=","tbl_order.User_ID")
				  ->leftjoin("tbl_city","tbl_city.City_Id","=","tbl_order.City_Id")
				  ->where("Status","=","process")
				  ->get();
    	return view("ShopKeeper-Side.Process_Order.viewdetailprocessorder",compact("detail"));
    }

    public function changeupdatestatus(Request $request)
    {
    	$obj = OrderModel::where("Order_Id",$request->orderid)->first();
    	$obj->Status = "complete";
    	$obj->save();

    	$getmail=OrderModel::where("Order_Id",$request->orderid)->get();
                foreach($getmail as $item)
                {
                    $user=$item->User_ID;

                    $email=UserModel::where('User_ID',$user)->select('Email_id')->get();
                    if($email)
                    {
                        foreach($email as $item)
                        {
                            $sendto = [$item->Email_id];
                            $data = [
                                    'subject' => "Your Order Has Been Rejected",
                                    'viewname' => 'mail.acceptmailsend',
                                    'OrderId' => $request->orderid   
                            ];
                            Mail::to($sendto)->send(new AcceptEmail($data));
                        }
                    } 
                }  
                return redirect("/ShopkeeperProcessingOrder")->with("status","Order Complete");
 	}
    
}
