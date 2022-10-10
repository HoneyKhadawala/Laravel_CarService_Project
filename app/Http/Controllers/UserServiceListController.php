<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicesModel;

class UserServiceListController extends Controller
{
    public function viewservicelist()
    {
    	$servicelistdata = ServicesModel::all();
    	return view('Front-Side.Services.ServiceList',compact("servicelistdata"));
    }

    public function viewservicelistdetail($id)
    {
    	$servicedata = ServicesModel::select("*")
                       ->where("Service_Id","=",$id)
                       ->get();
    	return view('Front-Side.Services.DetailServiceList',compact("servicedata"));
    }
}
