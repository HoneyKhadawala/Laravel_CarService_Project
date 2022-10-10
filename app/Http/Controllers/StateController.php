<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StateModel;

class StateController extends Controller
{
    public function viewstate()
    {
    	$statedata = StateModel::all();
    	return View('Admin-Side.State.viewstate',compact("statedata"));
    }

    public function addstate()
    {
    	return View('Admin-Side.State.addstate');
    }
    public function deleteState(Request $request)
    {
        $id=$request->deleteid;
        StateModel::where('State_Id', '=',$id)->delete();
        return redirect('/State/view')->with("Status","Data Deleted!"); 
    }
    
    
    public function insertState(Request $request)
    {
    	$obj = new StateModel;
    	$obj->State_Name = $request->txtstatename;
    	$obj->save();
        return redirect('/State/add')->with("Status","Data Inserted!"); 
    	// echo "obj";
    }

    public function editstate($id)
    {
        $statedata = StateModel::select("*")
                     ->where("State_Id","=",$id)
                     ->get();
        return View('Admin-Side.State.editstate',compact("statedata"));
    }

    public function updatestate(Request $request)
    {
        $obj = StateModel::where('State_Id',"=",$request->id)->first();
        $obj->State_Name = $request->txtstatename;
        $obj->save();
        return redirect('/State/view')->with("Status","Data Inserted!"); 
        // echo "update";
    }
}
