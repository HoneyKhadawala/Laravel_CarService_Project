<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopModel;
use App\Models\UserModel;
use App\Models\OrderModel;
use App\Models\ToCarModel;
use Session;

class UserLocationCotroller extends Controller
{
   public function viewlocation()
   {

   	 $getlatlong=ShopModel::select('*')->get();
   	 return view('Front-Side.Location.viewlocation',compact('getlatlong'));
   }

   public function vieworder(Request $request,$lat,$long,$shopn)
   {
      $shopid=$shopn;
      $userid = Session::get('User_ID');
   	$lati=$lat;
   	$longi=$long;
      $shop = ShopModel::select("*")
               ->where('Shop_Id',$shopn)
               ->get();
   	return view('Front-Side.Location.viewemgorder',compact('lati','longi','shop','shopid'));
   }

   public function insertemgorder(Request $request,$id)
   {
      $img=$request->txtimg;
      $ext = $img->getClientOriginalExtension();
      $newimgname = time().rand(1111,9999).".".$ext;
      $img->move("UserUpload/EmgImg",$newimgname);

      $userid = Session::get('User_ID');

      $obj = new ToCarModel;
      $obj->Shop_Id = $id;
      $obj->User_ID = $userid;
      $obj->Vehicle_img = $newimgname;
      $obj->Remark = $request->txtremark;
      $obj->To_latitude = $request->txtlat;
      $obj->To_longitude =$request->txtlong;

      $obj->save();
      // echo $shopn;

      return redirect('/Location')->with("status",'Order Placed!');
   }
}
