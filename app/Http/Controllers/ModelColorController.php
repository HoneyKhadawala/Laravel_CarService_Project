<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelsModel;
use App\Models\ModelColorModel;

class ModelColorController extends Controller
{
    public function viewmodelcolor()
    {
    	$modeldata = ModelColorModel::select("*")
    				 ->leftjoin("tbl_model","tbl_model.Model_Id","=","tbl_model_color.Model_Id")
    				 ->get();
    	return view("Admin-Side.Model-Color.viewmodelcolor",compact("modeldata"));
    }

    public function addmodelcolor()
    {
    	$insertmodeldata = ModelsModel::all();
    	return view("Admin-Side.Model-Color.addmodelcolor",compact("insertmodeldata"));
    }

    public function deletemodelcolor(Request $request)
    {
        $delete= $request->deleteid;
        ModelColorModel::where("ModelColor_Id","=",$delete)->delete();
        return redirect('/ModelColor/view')->with("status","Data Deleted!");
    }

    public function insertmodelcolor(Request $request)
    {
    	$img1=$request->imgfrontviewupload;
        $ext = $img1->getClientOriginalExtension();
        $newimg1name = time().rand(1111,9999).".".$ext;
        $img1->move("uploads/Model-Color",$newimg1name);

        $img2=$request->imgsideviewupload;
        $ext = $img2->getClientOriginalExtension();
        $newimg2name = time().rand(1111,9999).".".$ext;
        $img2->move("uploads/Model-Color",$newimg2name);

        $img3=$request->imgbackviewupload;
        $ext = $img3->getClientOriginalExtension();
        $newimg3name = time().rand(1111,9999).".".$ext;
        $img3->move("uploads/Model-Color",$newimg3name); 

    	$obj = new ModelColorModel;
    	$obj->Model_Id = $request->txtselectmodelname ;
    	$obj->Color = $request->txtmodelcolor ;
    	$obj->Image1 = $newimg1name;
    	$obj->Image2 = $newimg2name;
    	$obj->Image3 = $newimg3name;

    	$obj->save();

    	// echo "Inserted";
        return redirect("/ModelColor/add")->with("status","Data Inserted!");
    }

    public function editmodelcolor($id)
    {
        // echo "love";
        $getmodeldata = ModelsModel::all();
        $getmodelcolor = ModelColorModel::select("*")
                         ->where("ModelColor_Id","=",$id)
                         ->get();
        return view("Admin-Side.Model-Color.editmodelcolor",compact("getmodeldata","getmodelcolor"));
    }

    public function updatemodelcolor(Request $request)
    {
        if($request->hasFile('imgfrontviewupload'))
        {
            $img1=$request->imgfrontviewupload;
            $ext = $img1->getClientOriginalExtension();
            $newimg1name = time().rand(1111,9999).".".$ext;
            $img1->move("uploads/Model-Color",$newimg1name);
        }
        else
        {
            $newimg1name = $request->oldimg1;
        }

        if($request->hasFile('imgsideviewupload'))
        {
            $img2=$request->imgsideviewupload;
            $ext = $img2->getClientOriginalExtension();
            $newimg2name = time().rand(1111,9999).".".$ext;
            $img2->move("uploads/Model-Color",$newimg2name);
        }
        else
        {
            $newimg2name = $request->oldimg2;
        }

        if($request->hasFile('imgbackviewupload'))
        {
            $img3=$request->imgbackviewupload;
            $ext = $img3->getClientOriginalExtension();
            $newimg3name = time().rand(1111,9999).".".$ext;
            $img3->move("uploads/Model-Color",$newimg3name); 
        }
        else
        {
            $newimg3name = $request->oldimg3;
        }

        $obj = ModelColorModel::where("ModelColor_Id","=",$request->id)->first();
        $obj->Model_Id = $request->txtselectmodelname ;
        $obj->Color = $request->txtmodelcolor ;
        $obj->Image1 = $newimg1name;
        $obj->Image2 = $newimg2name;
        $obj->Image3 = $newimg3name;

        $obj->save();

        // echo "Inserted";
        return redirect("/ModelColor/view")->with("status","Data Updated!");
    }
}
