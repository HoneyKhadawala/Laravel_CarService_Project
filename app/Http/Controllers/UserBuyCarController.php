<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ModelsModel;
use App\Models\PriceModel;
use App\Models\CityModel;
use App\Models\CompanyModel;
use App\Models\AttributeModel;
use App\Models\ModelColorModel;

class UserBuyCarController extends Controller
{
     public function viewCarCompany()
    {   
        $carcompanydata = CompanyModel::get();
        return view('Front-Side.BuyCar.viewCarCompany',compact("carcompanydata"));
    }

    public function viewbuycar($id)
    {
    	$cardata = ModelsModel::select("*")
                    ->leftjoin("tbl_company","tbl_company.Company_Id","=","tbl_model.Company_Id")
                    ->where("tbl_company.Company_Id","=",$id)
                    ->get();
    	return view('Front-Side.BuyCar.viewbuycar',compact("cardata"));
    }

    public function viewdetailbuycar($id)
    {
    	$cardetail = ModelsModel::select("*")
                        ->leftjoin("tbl_company","tbl_company.Company_Id","=","tbl_model.Company_Id")
                		->where("Model_Id","=",$id)
                		->get();
        $pricedata = PriceModel::select("*")
                        ->leftjoin("tbl_city","tbl_city.City_Id","=","tbl_price.City_Id")
                		->where("Model_Id","=",$id)
                		->get();
        $colordata = ModelColorModel::select("*")
                        ->where("Model_Id","=",$id)
                        ->get();
        $attributedata = AttributeModel::select("*")                           
                            ->where("Model_Id","=",$id)
                            ->get();
    	return view('Front-Side.BuyCar.Detailbuycar',compact("cardetail","pricedata","attributedata","colordata"));
    }
}
