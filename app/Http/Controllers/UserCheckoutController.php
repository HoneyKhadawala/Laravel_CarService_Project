<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCheckoutController extends Controller
{
    public function viewcheckout()
   {
   		return view('Front-Side.Checkout.viewcheckout');
   }
}
