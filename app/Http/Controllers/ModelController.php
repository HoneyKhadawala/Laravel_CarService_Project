<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelsModel;
use App\Models\CompanyModel;

class ModelController extends Controller
{
    public function viewmodel()
    {
    	$modeldata = ModelsModel::select("*")
                    ->leftjoin("tbl_company","tbl_company.Company_Id","=","tbl_model.Company_Id")
                    ->get();
    	return View('Admin-Side.Model.viewmodel',compact("modeldata"));
    }
    public function addmodel()
    {
        $companydata = CompanyModel::all();
    	return View('Admin-Side.Model.addmodel',compact("companydata"));
    }

    public function insertModel(Request $request)
    {
        // Upload Image
        $image= $request->uploadfile;
        $ext= $image->getClientOriginalExtension();
        $newname = time().rand(1111,9999).".".$ext;
        $image->move("uploads/Model",$newname);
        // Upload Image


    	$obj = new ModelsModel;
        $obj->Company_Id = $request->txtcompany;
    	$obj->Model_name = $request->txtmodelname;
    	$obj->Model_image = $newname;
    	$obj->save();
        return redirect('/Model/add')->with("status","Data Inserted!");
    	// echo $request->txtmodelname;
    }

    public function deleteModel(Request $request)
    {
        $delete = $request->deleteid;
        ModelsModel::where("Model_Id","=",$delete)->delete();
        return redirect('/Model/view')->with("status","Data Deleted!");
    }

    public function editModel($id)
    {
        $editcompanydata = CompanyModel::all();
        $editmodeldata = ModelsModel::select("*")
                         ->where("Model_Id","=",$id)
                         ->get();
        return View('Admin-Side.Model.editmodel',compact("editcompanydata","editmodeldata"));   
        // echo "update";
    }

    public function updateModel(Request $request)
    {
        if($request->hasFile('uploadfile'))
        {
            // Upload Image
            $image= $request->uploadfile;
            $ext= $image->getClientOriginalExtension();
            $newname = time().rand(1111,9999).".".$ext;
            $image->move("uploads/Model",$newname);
            // Upload Image
        }
        else
        {
            $newname = $request->oldimg;
        }


        $obj = ModelsModel::where("Model_Id","=",$request->id)->first();
        $obj->Company_Id = $request->txtcompany;
        $obj->Model_name = $request->txtmodelname;
        $obj->Model_image = $newname;
        $obj->save();
        return redirect('/Model/view')->with("status","Data Updated!");
    }
}
