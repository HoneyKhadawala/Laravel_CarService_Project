<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PackageModel;

class ShopkeeperPurchasePackageController extends Controller
{
    public function viewpurachsepackage()
    {
    	$purchasedata = PackageModel::all();
    	return view('Shopkeeper-Side.Packages.viewshoppackage',compact("purchasedata"));
    }
    
}
