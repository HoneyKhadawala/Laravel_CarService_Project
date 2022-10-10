<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CityModel;
use App\Models\InsuranceCompanyModel;


class InsuranceCompanyController extends Controller
{
    public function viewinsurancecompany()
    {
        $insurancecmp = InsuranceCompanyModel::select("*")
                        ->leftjoin("tbl_city","tbl_city.City_Id","=","tbl_insurancecompany.City_Id")
                        ->get();
    	return view("Admin-Side.Insurance_Company.viewinsurancecompany",compact("insurancecmp"));
    }
    public function addinsurancecompany()
    {
        $citydata = CityModel::all();
    	return view("Admin-Side.Insurance_Company.addinsurancecompany",compact("citydata"));
    }

    public function insertInsuranceCompany(Request $request)
    {
        $obj = new InsuranceCompanyModel;
        $obj->InsuranceCmp_Name = $request->txtinsurancecmpname ;
        $obj->Description = $request->txtinsurancecmpdesc ;
        $obj->Email_id = $request->txtinsurancecmpmail;
        $obj->Contact_No = $request->txtinsurancecmpno ;
        $obj->Off_Address = $request->txtinsurancecmpadd ;
        $obj->Off_Address2 = $request->txtinsurancecmpadd2 ;
        $obj->City_Id = $request->txtinsurancecmpcity ;
        $obj->Landmark = $request->txtinsurancecmplandmark;
        $obj->Pincode = $request->txtinsurancecmppin ;
        $obj->Isactive = $request->txtinsurancecmpactive;

        $obj->save();

        // echo "string";
        return redirect('/InsuranceCompany/add')->with("status","Data Inserted!");

    }

    public function deleteInsuranceCompany(Request $request)
    {
        $delete= $request->deleteid;
        InsuranceCompanyModel::where("InsuranceCmp_Id","=",$delete)->delete();
        return redirect('/InsuranceCompany/view')->with("status","Data Deleted!");
    }

   	public function editInsuranceCompany($id)
    {
        // echo "Update";
        $citydata = CityModel::all();
        $editinsurancecmp = InsuranceCompanyModel::select("*")
                            ->where("InsuranceCmp_Id","=",$id)
                            ->get();
    	return view("Admin-Side.Insurance_Company.editinsurancecompany",compact("editinsurancecmp","citydata"));
    } 

        public function updateInsuranceCompany(Request $request)
        {
            $obj = InsuranceCompanyModel::where("InsuranceCmp_Id","=",$request->id)->first(); 
            $obj->InsuranceCmp_Name = $request->txtinsurancecmpname ;
            $obj->Description = $request->txtinsurancecmpdesc ;
            $obj->Email_id = $request->txtinsurancecmpmail;
            $obj->Contact_No = $request->txtinsurancecmpno ;
            $obj->Off_Address = $request->txtinsurancecmpadd ;
            $obj->Off_Address2 = $request->txtinsurancecmpadd2 ;
            $obj->City_Id = $request->txtinsurancecmpcity ;
            $obj->Landmark = $request->txtinsurancecmplandmark;
            $obj->Pincode = $request->txtinsurancecmppin ;
            $obj->Isactive = $request->txtinsurancecmpactive;

            $obj->save();

            // echo "string";
            return redirect('/InsuranceCompany/view')->with("status","Data Updated!");

        }
}
