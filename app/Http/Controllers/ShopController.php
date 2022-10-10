<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopModel;
use App\Models\CityModel;
// use App\Models\CityModel;

class ShopController extends Controller
{
	public function addshop()
    {
        $shopdata = CityModel::all();
    	return View('Admin-Side.Shop.addshop',compact("shopdata"));
    }

    public function insertShop(Request $request)
    {
        // Uplaod Proof Image
        $proof=$request->txtproofupload;
        $ext = $proof->getClientOriginalExtension();
        $newproofname = time().rand(1111,9999).".".$ext;
        $proof->move("uploads/shop/proof",$newproofname);
        // Uplaod Proof Image

        // Uplaod Image
        $image=$request->txtimgupload;
        $ext = $image->getClientOriginalExtension();
        $newimagename = time().rand(1111,9999).".".$ext;
        $image->move("uploads/shop/photo",$newimagename);
        // Uplaod Image

        // Uplaod logo Image
        $logo=$request->txtlogoupload;
        $ext = $logo->getClientOriginalExtension();
        $newlogoname = time().rand(1111,9999).".".$ext;
        $logo->move("uploads/shop/logo",$newlogoname);
        // Uplaod logo Image


    	$obj = new ShopModel;
    	$obj->Shop_name = $request->txtshopname;
    	$obj->Shop_OwnerName = $request->txtownername;
    	$obj->Shopkeeper_User_name = $request->txtusername;
    	$obj->password = $request->txtpass;
    	$obj->Contact_No = $request->txtnum;
    	$obj->Email_Id = $request->txtmail;
    	$obj->Address = $request->txtadd;
    	$obj->Address2 = $request->txtadd2;
    	$obj->City_Id = $request->txtcity;
    	$obj->landmark = $request->txtlandmark;
    	$obj->pincode = $request->txtpin;
    	
    	$obj->latitude = $request->txtlattitide;
    	$obj->longitude = $request->txtlongitude;
    	$obj->About_Shop = $request->txtaboutshop;
    	$obj->Status = $request->txtstatus;
    	$obj->IsBlock  = $request->UserBlock;
    	$obj->Shop_proof = $newproofname;
    	$obj->Shop_Image = $newimagename;
    	$obj->Shop_logo = $newlogoname;
    	$obj->save();

    	// echo $request->txtstatus;
        return redirect('/Shop/add')->with("status","Data Inserted!");
    }

    public function editshop()
    {
        $shopdata = CityModel::all();
        return View('Admin-Side.Shop.editshop',compact("shopdata"));
    }



    // Pending Shop

    public function viewpendingshop()
    {
        $pendingdata  = ShopModel::select("*")
                        ->leftjoin("tbl_city","tbl_city.City_Id","=","tbl_shop.City_Id")
                        ->where("status","=","pending")                        
                        ->get();
        return View('Admin-Side.Pending-Shop.viewpendingshop',compact("pendingdata"));
    }
    public function viewcompleteshop()
    {
        $pendingdata  = ShopModel::select("*")
                        ->where("status","=","complete")
                        ->get();
        return View('Admin-Side.Pending-Shop.viewpendingshop',compact("pendingdata"));
    }

    public function deletePendingShop(Request $request)
    {
        $delete= $request->deleteid;
        ShopModel::where("Shop_Id","=",$delete)->delete();
        return redirect('/PendingShop/view')->with("status","Data Deleted!");
    }

    public function editPendingShop($id)
    {
        $pendingdata = ShopModel::select("*")
                ->where("Shop_Id","=",$id)
                ->get();
        $citydata = CityModel::all();        
        return View('Admin-Side.Pending-Shop.editpendingshop',compact("pendingdata","citydata"));
    }

    public function updatePendingShop(Request $request)
    {
        if($request->hasFile('txtproofupload'))
        {
            // Uplaod Proof Image
            $proof=$request->txtproofupload;
            $ext = $proof->getClientOriginalExtension();
            $newproofname = time().rand(1111,9999).".".$ext;
            $proof->move("uploads/shop/proof",$newproofname);
            // Uplaod Proof Image
        }
        else
        {
            $newproofname = $request->oldimg2;
        }

        if($request->hasFile('txtimgupload'))
        {
            // Uplaod Image
            $image=$request->txtimgupload;
            $ext = $image->getClientOriginalExtension();
            $newimagename = time().rand(1111,9999).".".$ext;
            $image->move("uploads/shop/photo",$newimagename);
            // Uplaod Image
        }
        else
        {   
            $newimagename = $request->oldimg;           
        }

        if($request->hasFile('txtlogoupload'))
        {
            // Uplaod logo Image
            $logo=$request->txtlogoupload;
            $ext = $logo->getClientOriginalExtension();
            $newlogoname = time().rand(1111,9999).".".$ext;
            $logo->move("uploads/shop/logo",$newlogoname);
            // Uplaod logo Image
        }
        else
        {
             $newlogoname = $request->oldimg1;            
        }

        $obj = ShopModel::where("Shop_Id","=",$request->id)->first();
        $obj->Shop_name = $request->txtshopname;
        $obj->Shop_OwnerName = $request->txtownername;
        $obj->Shopkeeper_User_name = $request->txtusername;
        $obj->password = $request->txtpass;
        $obj->Contact_No = $request->txtnum;
        $obj->Email_Id = $request->txtmail;
        $obj->Address = $request->txtadd;
        $obj->Address2 = $request->txtadd2;
        $obj->City_Id = $request->txtcity;
        $obj->landmark = $request->txtlandmark;
        $obj->pincode = $request->txtpin;
        // $obj->Registration_Date = $request->txtregidate;
        $obj->latitude = $request->txtlattitide;
        $obj->longitude = $request->txtlongitude;
        $obj->About_Shop = $request->txtaboutshop;
        $obj->Status = $request->txtstatus;
        $obj->IsBlock  = $request->UserBlock;
        $obj->Shop_proof = $newproofname;
        $obj->Shop_Image = $newimagename;
        $obj->Shop_logo = $newlogoname;
        $obj->save();

        // echo $request->txtstatus;
        return redirect('/PendingShop/view')->with("status","Data Updated!");
    }

    // Pending Shop



    // Rejected Shop

    public function viewrejectedshop()
    {
        $rejecteddata  = ShopModel::select("*")
                        ->leftjoin("tbl_city","tbl_city.City_Id","=","tbl_shop.City_Id")
                        ->where("status","=","rejected")
                        ->get();
        return View('Admin-Side.Rejected-Shop.viewrejectedshop',compact("rejecteddata"));
    }

    public function deleteRejectedShop(Request $request)
    {
        $delete= $request->deleteid;
        ShopModel::where("Shop_Id","=",$delete)->delete();
        return redirect('/Rejected Shop/view')->with("status","Data Deleted!");
    }

    public function editRejectedShop($id)
    {
        // echo "string";
        $editrejected = ShopModel::select("*")
                        ->where("Shop_Id","=",$id)
                        ->get();
        $citydata = CityModel::all();
        return view('Admin-Side.Rejected-Shop.editrejectedshop',compact("editrejected","citydata"));
    }

    public function updateRejectedShop(Request $request)
    {
        if($request->hasFile('txtproofupload'))
        {
            // Uplaod Proof Image
            $proof=$request->txtproofupload;
            $ext = $proof->getClientOriginalExtension();
            $newproofname = time().rand(1111,9999).".".$ext;
            $proof->move("uploads/shop/proof",$newproofname);
            // Uplaod Proof Image
        }
        else
        {
            $newproofname = $request->oldimg2;
        }

        if($request->hasFile('txtimgupload'))
        {
            // Uplaod Image
            $image=$request->txtimgupload;
            $ext = $image->getClientOriginalExtension();
            $newimagename = time().rand(1111,9999).".".$ext;
            $image->move("uploads/shop/photo",$newimagename);
            // Uplaod Image
        }
        else
        {   
            $newimagename = $request->oldimg;           
        }

        if($request->hasFile('txtlogoupload'))
        {
            // Uplaod logo Image
            $logo=$request->txtlogoupload;
            $ext = $logo->getClientOriginalExtension();
            $newlogoname = time().rand(1111,9999).".".$ext;
            $logo->move("uploads/shop/logo",$newlogoname);
            // Uplaod logo Image
        }
        else
        {
             $newlogoname = $request->oldimg1;            
        }

        $obj = ShopModel::where("Shop_Id","=",$request->id)->first();
        $obj->Shop_name = $request->txtshopname;
        $obj->Shop_OwnerName = $request->txtownername;
        $obj->Shopkeeper_User_name = $request->txtusername;
        $obj->password = $request->txtpass;
        $obj->Contact_No = $request->txtnum;
        $obj->Email_Id = $request->txtmail;
        $obj->Address = $request->txtadd;
        $obj->Address2 = $request->txtadd2;
        $obj->City_Id = $request->txtcity;
        $obj->landmark = $request->txtlandmark;
        $obj->pincode = $request->txtpin;
        // $obj->Registration_Date = $request->txtregidate;
        $obj->latitude = $request->txtlattitide;
        $obj->longitude = $request->txtlongitude;
        $obj->About_Shop = $request->txtaboutshop;
        $obj->Status = $request->txtstatus;
        $obj->IsBlock  = $request->UserBlock;
        $obj->Shop_proof = $newproofname;
        $obj->Shop_Image = $newimagename;
        $obj->Shop_logo = $newlogoname;
        $obj->save();

        // echo $request->txtstatus;
        return redirect('/RejectedShop/view')->with("status","Data Updated!");
    }

    // Rejected Shop



    // Approve Shop
    
    public function viewapproveshop()
    {
        $approvedata  = ShopModel::select("*")
                        ->leftjoin("tbl_city","tbl_city.City_Id","=","tbl_shop.City_Id")
                        ->where("status","=","approve")
                        ->get();
        $citydata = CityModel::all();
        return View('Admin-Side.Approve-Shop.viewapproveshop',compact("approvedata","citydata"));
    }

    public function deleteApproveShop(Request $request)
    {
        $delete= $request->deleteid;
        ShopModel::where("Shop_Id","=",$delete)->delete();
        return redirect('/Approve Shop/view')->with("status","Data Deleted!");  
    }

    public function editApproveShop($id)
    {
        $editapprove = ShopModel::select("*")
                       ->where("Shop_Id","=",$id)
                       ->get();
        $citydata = CityModel::all();
        return view("Admin-Side.Approve-Shop.editapproveshop",compact("editapprove","citydata"));  
    }

    public function updateApproveShop(Request $request)
    {
        if($request->hasFile('txtproofupload'))
        {
            // Uplaod Proof Image
            $proof=$request->txtproofupload;
            $ext = $proof->getClientOriginalExtension();
            $newproofname = time().rand(1111,9999).".".$ext;
            $proof->move("uploads/shop/proof",$newproofname);
            // Uplaod Proof Image
        }
        else
        {
            $newproofname = $request->oldimg2;
        }

        if($request->hasFile('txtimgupload'))
        {
            // Uplaod Image
            $image=$request->txtimgupload;
            $ext = $image->getClientOriginalExtension();
            $newimagename = time().rand(1111,9999).".".$ext;
            $image->move("uploads/shop/photo",$newimagename);
            // Uplaod Image
        }
        else
        {   
            $newimagename = $request->oldimg;           
        }

        if($request->hasFile('txtlogoupload'))
        {
            // Uplaod logo Image
            $logo=$request->txtlogoupload;
            $ext = $logo->getClientOriginalExtension();
            $newlogoname = time().rand(1111,9999).".".$ext;
            $logo->move("uploads/shop/logo",$newlogoname);
            // Uplaod logo Image
        }
        else
        {
             $newlogoname = $request->oldimg1;            
        }

        $obj = ShopModel::where("Shop_Id","=",$request->id)->first();
        $obj->Shop_name = $request->txtshopname;
        $obj->Shop_OwnerName = $request->txtownername;
        $obj->Shopkeeper_User_name = $request->txtusername;
        $obj->password = $request->txtpass;
        $obj->Contact_No = $request->txtnum;
        $obj->Email_Id = $request->txtmail;
        $obj->Address = $request->txtadd;
        $obj->Address2 = $request->txtadd2;
        $obj->City_Id = $request->txtcity;
        $obj->landmark = $request->txtlandmark;
        $obj->pincode = $request->txtpin;
        // $obj->Registration_Date = $request->;
        $obj->latitude = $request->txtlattitide;
        $obj->longitude = $request->txtlongitude;
        $obj->About_Shop = $request->txtaboutshop;
        $obj->Status = $request->txtstatus;
        $obj->IsBlock  = $request->UserBlock;
        $obj->Shop_proof = $newproofname;
        $obj->Shop_Image = $newimagename;
        $obj->Shop_logo = $newlogoname;
        $obj->save();

        // echo $request->txtstatus;
        return redirect('/ApproveShop/view')->with("status","Data Updated!");
    }
    // Approve Shop
    

}