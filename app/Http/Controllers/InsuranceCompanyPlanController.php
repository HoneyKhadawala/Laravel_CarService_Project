<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InsuranceCompanyPlanModel;

class InsuranceCompanyPlanController extends Controller
{
	public function viewinsuranceplan()
	{
		$inquredata = InsuranceCompanyPlanModel::all();
		return view("Admin-Side.Insurance_Plan.viewinsuranceplan",compact("inquredata"));
	}

	public function addinsuranceplan()
	{
		return view("Admin-Side.Insurance_Plan.addinsuranceplan");
	}

	public function insertinsuranceplan(Request $request)
	{

		// Upload Img
		$img = $request->txtinsuranceplanpdf;
		$ext = $img->getClientOriginalExtension();
		$newname = time().rand(1111,9999).".".$ext;
		$img = move("uploads/InsurancePlan",$newname);
		// Upload Img

		$obj = new InsuranceCompanyPlanModel;
		$obj->InsurancePlan_Name = $request->txtinsurancecmpname;
		$obj->InsurancePlan_desc = $request->txtinsurancecmpdesc;
		$obj->InsurancePlan_price = $request->txtinsuranceplanprice;
		$obj->InsurancePlan_Duration = $request->txtinsuranceplanduration;
		$obj->InsurancePlan_pdf_file = $newname;
		$obj->InsurancePlan_Isactive = $request->txtinsuranceplanactive;
		$obj->save();

		// echo "Inserted";
		return redirect("/InsuranceCompanyPlan/add")->with("status","Data Inserted!");
	}

	public function deleteinsuranceplan(Request $request)
    {
        $delete= $request->deleteid;
        InsuranceCompanyPlanModel::where("InsurancePlan_Id","=",$delete)->delete();
        return redirect('/InsuranceCompanyPlan/view')->with("status","Data Deleted!");
    }

	public function editinsuranceplan($id)
	{
		$inquredata = InsuranceCompanyPlanModel::select("*")
					  ->where("InsurancePlan_Id","=",$id)
					  ->get();
		return view("Admin-Side.Insurance_Plan.editinsuranceplan",compact("inquredata"));
	}

	public function updateinsuranceplan(Request $request)
	{
		if($request->hasFile('txtinsuranceplanpdf'))
		{
			// Upload Img
			$img = $request->txtinsuranceplanpdf;
			$ext = $img->getClientOriginalExtension();
			$newname = time().rand(1111,9999).".".$ext;
			$img = move("uploads/InsurancePlan",$newname);
			// Upload Img
		}
		else
		{
			$newname= $request->oldimg;
		}

		$obj = InsuranceCompanyPlanModel::where("InsurancePlan_Id","=",$request->id)->first();
		$obj->InsurancePlan_Name = $request->txtinsurancecmpname;
		$obj->InsurancePlan_desc = $request->txtinsurancecmpdesc;
		$obj->InsurancePlan_price = $request->txtinsuranceplanprice;
		$obj->InsurancePlan_Duration = $request->txtinsuranceplanduration;
		$obj->InsurancePlan_pdf_file = $newname;
		$obj->InsurancePlan_Isactive = $request->txtinsuranceplanactive;
		$obj->save();

		// echo "Inserted";	
		return redirect("/InsuranceCompanyPlan/view")->with("status","Data Updated!");
	}
}
