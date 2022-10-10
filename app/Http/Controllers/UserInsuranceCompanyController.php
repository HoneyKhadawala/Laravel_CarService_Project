<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CityModel;
use App\Models\InsuranceCompanyModel;
use App\Models\InsuranceCompanyPlanModel;

class UserInsuranceCompanyController extends Controller
{
    public function viewinsuranceco()
    {
    	$companydata = InsuranceCompanyModel::all();
    	return view('Front-Side.InsuranceCo.viewcompany',compact("companydata")); 
    }

    public function viewinsurancecodetail($id)
    {
    	$displaycompanydata = InsuranceCompanyModel::select("*")
    							->leftjoin("tbl_city","tbl_city.City_Id","=","tbl_insurancecompany.City_Id")
    							->where("InsuranceCmp_Id","=",$id)   
    							->get();
		// $citydata = CityModel::all();
    	return view('Front-Side.InsuranceCo.Detailcompany',compact("displaycompanydata"));
    }

    public function viewplan()
    {
        $displayplan = InsuranceCompanyPlanModel::select("*")
                        ->leftjoin('tbl_company','tbl_company.Company_Id','=','tbl_insuranceplan.Company_Id')
                        // ->where()
                        ->get();
        
        return view('Front-Side.InsuranceCo.viewinsuranceplan',compact("displayplan"));
    }

    public function viewcompanyinqurey()
    {
        // $citydata = CityModel::all();
        return view('Front-Side.InsuranceCo.viewinqureform');
    }

    public function insertinqure(Request $request)
    {
        $userid = Session::get('User_ID');       
    }
}
