<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogModel;
use App\Models\OrderModel; 

class LogController extends Controller
{
    public function loadlog()
    {
    	$logdata = LogModel::select("*")
    			   ->leftjoin("tbl_order","tbl_order.Order_Id","=","tbl_log.Order_Id")
    			   ->get();
    	return View('Admin-Side.Log.log',compact("logdata"));
    }

    public function deletelog(Request $request)
    {
    	$delete= $request->deleteid;
		LogModel::where("Log_Id","=",$delete)->delete();
		return redirect('/Log')->with("status","Data Deleted!");
    }
}
