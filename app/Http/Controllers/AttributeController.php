<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttributeModel;
use App\Models\ModelsModel;

class AttributeController extends Controller
{
    public function viewattribute()
    {
    	$attributedata = AttributeModel::select("*")
    					 ->leftjoin("tbl_model","tbl_model.Model_Id","=","tbl_attribute.Model_Id")
    					 ->get();;
    	return view("Admin-Side.Attribute.viewattribute",compact("attributedata"));
    }

    public function addattribute()
    {
    	$modeldata = ModelsModel::all();
    	return view("Admin-Side.Attribute.addattribute",compact("modeldata"));
    }

    public function insertattribute(Request $request)
    {
    	$obj = new AttributeModel;
    	$obj->Attribute_name = $request->txtattributename;
    	$obj->Attribute_value = $request->txtattributevalue;
    	$obj->Model_Id = $request->txtattributemodel;

    	$obj->save();

    	return redirect("/Attribute/add")->with("status","Data inserted!");

    	// echo "inserted";
    }

    public function deleteattribute(Request $request)
    {
    	$delete = $request->deleteid;
    	AttributeModel::where("Attribute_Id","=",$delete)->delete();
    	return redirect('/Attribute/view')->with("status","Data Deleted!");
    }

    public function editattribute($id)
    {
    	// echo "Love";
    	$editmodeldata = ModelsModel::all();
    	$Attributedata = AttributeModel::select("*")
    					 ->where("Attribute_Id","=",$id)
    					 ->get();

    	return view("Admin-Side.Attribute.editattribute",compact("Attributedata","editmodeldata"));
    }

    public function updateattribute(Request $request)
    {
    	$obj = AttributeModel::where("Attribute_Id","=",$request->id)->first();
    	$obj->Attribute_name = $request->txtattributename;
    	$obj->Attribute_value = $request->txtattributevalue;
    	$obj->Model_Id = $request->txtattributemodel;

    	$obj->save();

    	// echo "Updated";

    	return redirect("/Attribute/view")->with("status","Data Updated!");
    }
}
