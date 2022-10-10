<?php

namespace App\Http\Controllers;
use App\Models\ShopModel;
use App\Models\CityModel;
use App\Models\ModelsModel;
use App\Models\OrderModel;
use App\Models\UserModel;
use App\Models\ShopServiceModel;
use App\Models\DetailsModel;
use Illuminate\Http\Request;
use Session;
use DB;
class UserShopListController extends Controller
{
    public function viewshoplist()
    {
    	$shopdata =  ShopModel::all();
    	return view("Front-Side.Shoplist.viewshoplist",compact("shopdata"));
    }

    public function viewshopportfolio($id)
    {
    	$viewshopdata = ShopModel::select("*")
                        ->leftjoin("tbl_city","tbl_city.City_Id","=","tbl_shop.City_Id")
                		->where("Shop_Id","=",$id)
                		->get();

        $shopid = Session::get('Shop_Id');
        $citydata = CityModel::all();

        $servicedata = ShopServiceModel::select('*')
                        ->leftjoin('tbl_service','tbl_service.Service_Id','=','tbl_shopservice.Service_Id')
                        ->where('tbl_shopservice.Shop_Id',$id)
                        ->get();

        $modeldata = ModelsModel::all();
           
    	return view("Front-Side.Shoplist.PortfolioShop",compact("viewshopdata","citydata","modeldata","servicedata"));	
    } 

    public function viewshopserviceorder(Request $request,$id)
    {   

       $data=$request->checkservice;
    
       $servicedata=implode(',',$data);
      // dd($servicedata);
       $serviceprice=DB::select("select SUM(Price) as totalprice from tbl_shopservice where Service_Id in 
        ($servicedata)");
       // DB::table('tbl_shopservice')->whereIn('Service_Id', [$servicedata])->get();
       
       // $serviceprice= ShopServiceModel::where('Shop_Id',$id)->whereIn('Service_Id',[1,2,5])->select('Price')->get();
       // dd($serviceprice);
         
        // dd($b);
        // echo "asd";
       foreach($serviceprice as $item)
       {
         $priceget=$item->totalprice;
         
       }

        $citydata = CityModel::all();
        $modeldata = ModelsModel::all();
        return view("Front-Side.Shoplist.InsertOrder",compact("citydata","modeldata",'servicedata','priceget'));
    }

    public function insertorder(Request $request)
    {
        $userid = Session::get('User_ID');
        $userdata = UserModel::select("*")->where('User_ID','=',$userid)->get();
        // $shopdata = ShopModel::find($id);
        // $shopdata = ShopModel::select("*")->where("Shop_Id","=",$id)->get();
        $total=0;
        $totalpayment=explode(",",$request->totalpayment);
        foreach($totalpayment as $s) {
            $s = trim($s);
           $total=$total+$s;
        }


        $obj = new OrderModel;
        // $obj->Shop_Id = $shopdata;
        $obj->User_ID = $userid ;
        $obj->Model_Id = $request->usermodelcar ;
        $obj->PickAddress1 = $request->txtaddress ;
        $obj->PickAddress2 = $request->txtaddress2 ;
        $obj->Landmark = $request->txtlandmark ;
        $obj->Pincode = $request->txtpincode ;
        $obj->City_Id = $request->txtcity ;
        $obj->Latitude = $request->txtlattitide ;
        $obj->Longitude = $request->txtlongitude ;
        // $obj->IsPay = $request->txtispay ;
        $obj->TotalPayment=$total;
        $obj->OrderDate =$request->txtorder;
        $obj->Transaction_No = "";
        // $obj->PayMode = $request->txtpaymode ;

        $obj->save();
        $oid=$obj->Order_Id;

        //echo "Order :".$oid;

        $services=explode(",",$request->services);
        foreach($services as $s) {
            $s = trim($s);
            $obj = new DetailsModel;
            $obj->Order_Id = $oid;
            $obj->ShopService_Id=$s;
            $obj->save();
        }

        // echo "submit";
        return redirect("/ShopList")->with("status","Order Placed");

    }
}
