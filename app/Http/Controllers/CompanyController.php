<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyModel;

class CompanyController extends Controller
{
    public function viewcompany()
    {
    	$companydata = CompanyModel::all();
    	return View('Admin-Side.Company.viewcompany',compact("companydata"));
    }
     public function addcompany()
    {
    	return View('Admin-Side.Company.addcompany');
    }

    public function insertCompany(Request $request)
    {


        //upload - 
        $image = $request->companylogo;//(abc.jpg) we stroe img name in $image
        $ext = $image->getClientOriginalExtension();//(jpg) to get the extension of image file
        $newname = time().rand(1111,9999).".".$ext;//(6153456142321.jpg) to rename the image name 'time()' is used for taking current time in binary value then '.rand(1111,9999)' is used for taking 1 to 9 any random value 4times '.' is used to put dot after file name and $ext is used for put extension of image file
        $image->move("uploads/company",$newname); // gaving part to store img in folder with new name
        //upload

    	$obj = new CompanyModel;
    	$obj->Company_name = $request->txtcompanyname;
    	$obj->Company_logo = $newname; // calling newname to rename the image name for view form
    	$obj->save();
    	return redirect('/Company/add')->with("status","Data Inserted!");
    	// echo $request->txtcompanyname;
    }

    public function deleteCompany(Request $request)
    {
        $delete = $request->deleteid;
        CompanyModel::where("Company_Id","=",$delete)->delete();
        return redirect('/Company/view')->with("status","Data Deleted!");
    }

    public function editCompany($id)
    {
        // echo "Update";
        $companydata = CompanyModel::select("*")
                       ->where("Company_Id","=",$id)
                       ->get();
        return view("Admin-Side.Company.editcompany",compact("companydata"));
    }

    public function updateCompany(Request $request)
    {
        if($request->hasFile("companylogo"))
        {
             //upload
            $image = $request->companylogo;
            $ext = $image->getClientOriginalExtension();
            $newname = time().rand(1111,9999).".".$ext;
            $image->move("uploads/company",$newname); 
            //upload
        }
        else
        {
            $newname = $request->oldimg;
        }

        $obj =CompanyModel::where("Company_Id","=",$request->id)->first();
        $obj->Company_name = $request->txtcompanyname;
        $obj->Company_logo = $newname; // calling newname to rename the image name for view form
        $obj->save();
        return redirect('/Company/view')->with("status","Data Inserted!");   
    }
}
