<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InsuranceCompanyInqureModel;
use App\Models\UserModel;

class InsuranceCompanyInqureController extends Controller
{
    public function viewinsuranceinqure()
    {
    	$inquredata = InsuranceCompanyInqureModel::select("*")
    				  ->leftjoin("tbl_user","tbl_user.User_ID","=","tbl_insuranceinqure.User_ID")
    				  ->get();
    	return view("Admin-Side.Insurance_Inqure.viewinsuranceinqure",compact("inquredata"));
    }

    public function deleteinsuranceinqure(Request $request)
    {
    	$delete = $request->deleteid;
    	InsuranceCompanyInqureModel::where("Inqure_ID","=",$delete)->delete();
    	return redirect("/InsuranceCompanyInqure/view")->with("status","Data Deleted!");
    }
}
