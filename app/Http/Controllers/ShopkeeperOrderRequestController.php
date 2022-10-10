<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopkeeperOrderRequestController extends Controller
{
    public function viewrequest()
    {
    	return view("ShopKeeper-Side.Order_Request.vieworderrequest");
    }
}
