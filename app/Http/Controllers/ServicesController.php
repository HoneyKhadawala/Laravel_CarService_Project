<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicesModel;

class ServicesController extends Controller
{
    public function viewservice()
    {
    	$servicedata = ServicesModel::all();
    	return View('Admin-Side.Services.viewservices', compact("servicedata"));
    }
     public function addservice()
    {
    	return View('Admin-Side.Services.addservices');
    }

    public function insertService(Request $request)
    {
    	$obj = new ServicesModel;
    	$obj->Service_name = $request->txtservicename;
        $obj->Service_description = $request->txtservicedesc;
        $obj->Service_type = $request->txtservicetype;
    	$obj->save();

        return redirect('/Service/add')->with("status","Data Inserted!");
    	// echo "insert";
        // echo $request->txtservicename, $request->txtservicedesc , $request->txtservicetype;
    }

    public function deleteService(Request $request)
    {
        $delete = $request->deleteid;
        ServicesModel::where("Service_Id","=",$delete)->delete();
        return redirect('/Service/view')->with("status","Data Deleted!");
        // echo "delete";
    }

     public function editservice($id)
    {
        $servicedata = ServicesModel::select("*")
                       ->where("Service_Id","=",$id)
                       ->get();
        return View('Admin-Side.Services.editservices',compact("servicedata"));
    }

    public function updateservice(Request $request)
    {
        $obj = ServicesModel::where("Service_Id","=",$request->id)->first();
        $obj->Service_name = $request->txtservicename;
        $obj->Service_description = $request->txtservicedesc;
        $obj->Service_type = $request->txtservicetype;
        $obj->save();

        return redirect('/Service/view')->with("status","Data Inserted!");
    }
}
