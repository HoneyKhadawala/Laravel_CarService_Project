<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopkeeperDashboardController extends Controller
{
   public function viewdashboard()
   {
   		if(session("islogin"))
   		{
   			if(session("islogin")=="no")
   			{
   				return redirect("/ShopkeeperLogin");
   			}
   		}
   		else
   		{
   			return redirect("/ShopkeeperLogin");
   		}
   		return view('Shopkeeper-Side.IndexDashboard.index');
   }	
}
