<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderModel;
use App\Models\DetailsModel;
use Mail;
use App\Mail\AcceptEmail;
use App\Models\UserModel;
class ShopkeeperPendingOrderController extends Controller
{
	public function viewpendingorder()
	{
		$orderdata = OrderModel::select("*")
					 ->leftjoin("tbl_model","tbl_model.Model_Id","=","tbl_order.Model_Id")
					 ->leftjoin("tbl_user","tbl_user.User_ID","=","tbl_order.User_ID")
					 ->where("Status","=","pending")
					 ->get();
        $rejectdata = OrderModel::select("*")
                     ->leftjoin("tbl_model","tbl_model.Model_Id","=","tbl_order.Model_Id")
                     ->leftjoin("tbl_user","tbl_user.User_ID","=","tbl_order.User_ID")
                     ->where("Status","=","rejected")
                     ->get();
		return view("ShopKeeper-Side.Pending_Order.viewpendingorder",compact("orderdata","rejectdata"));
    }

     public function viewdetailorder($id)
     {
     	$detail = OrderModel::select("*")
    			  ->leftjoin("tbl_model","tbl_model.Model_Id","=","tbl_order.Model_Id")
					 ->leftjoin("tbl_user","tbl_user.User_ID","=","tbl_order.User_ID")
					 ->leftjoin("tbl_city","tbl_city.City_Id","=","tbl_order.City_Id")
					 ->get();
     	return view("ShopKeeper-Side.Pending_Order.viewdetailpendingorder",compact("detail"));
     }

     public function viewrejectorder($id)
     {
        $rejectdata = OrderModel::select("*")
                     ->leftjoin("tbl_model","tbl_model.Model_Id","=","tbl_order.Model_Id")
                     ->leftjoin("tbl_user","tbl_user.User_ID","=","tbl_order.User_ID")
                     ->where("Status","=","rejected")
                     ->get();
        return view("ShopKeeper-Side.Pending_Order.viewdetailrejectedorder",compact("rejectdata"));
     }

    public function changestatus(Request $request)
    {
        switch ($request->input('action')) {
            case 'accept':
                # code...
                $obj= OrderModel::where("Order_Id",$request->orderid)->first();
                $obj->Status = "process";
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
                                    'subject' => "Your Order Has Been Accepted",
                                    'viewname' => 'mail.acceptmailsend',
                                    'OrderId' => $request->orderid   
                            ];
                            Mail::to($sendto)->send(new AcceptEmail($data));
                        }
                    }
                }
                return redirect("/ShopkeeperPendingOrder")->with("status","Order Accepted");
                break;
            

            case 'reject':
                # code...
                $obj= OrderModel::where("Order_Id",$request->orderid)->first();
                $obj->Status = "rejected";
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
                return redirect("/ShopkeeperPendingOrder")->with("status","Order Rejected");
                break;
        }
    }
    	   // dd($request->orderid); // //for printing a value on screen 
        		
    }
