<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PackageModel;

class PackageController extends Controller
{
    public function viewpackage()
    {
    	$packagedata = PackageModel::all();
    	return View('Admin-Side.Package.viewpackage',compact("packagedata"));	
    }
    public function addpackage()
    {
    	return View('Admin-Side.Package.addpackage');	
    }
    public function insertPackage(Request $request)
    {
    	 // Upload Image
        $image= $request->uploadfile;
        $ext= $image->getClientOriginalExtension();
        $newname = time().rand(1111,9999).".".$ext;
        $image->move("uploads/Model",$newname);
        // Upload Image

    	$obj = new PackageModel;
    	$obj->Package_name = $request->txtpackagename;
    	$obj->Package_days = $request->txtpackagedays;
    	$obj->Package_desc = $request->txtpackagedesc;
    	$obj->Package_img = $newname;
    	$obj->Is_Active = $request->packageissactive;
    	$obj->save();

    	return redirect("/Package/add")->with("status","Data Insert!");
    	// echo "Insert";
    }

    public function deletePackage(Request $request)
    {
        $delete = $request->deleteid;
        PackageModel::where("Package_Id","=",$delete)->delete();
        return redirect("/Package/view")->with("status","Data Deleted!");
        // echo "delete";
    }

    public function editpackage($id)
    {
        $packagedata = PackageModel::select("*")
                       ->where("Package_Id","=",$id)
                       ->get();
        return View('Admin-Side.Package.editpackage',compact("packagedata"));  
    }

    public function updatePackage(Request $request)
    {
        if($request->hasFile('txtpackageimg'))
        {
            // Upload Image
            $image = $request->txtpackageimg;
            $ext = $image->getClientOriginalExtension();
            $newname = time().rand(1111,9999).".".$ext;
            $image->move("uploads/Package",$newname);
            // Upload Image
        }
        else
        {
            $newname = $request->oldimg;
        }

        $obj = PackageModel::where("Package_Id","=",$request->id)->first();
        $obj->Package_name = $request->txtpackagename;
        $obj->Package_days = $request->txtpackagedays;
        $obj->Package_desc = $request->txtpackagedesc;
        // $obj->Package_img = $newname;
        $obj->Is_Active = $request->packageissactive;
        $obj->save();

        return redirect("/Package/view")->with("status","Data Update!");   
    }
}
