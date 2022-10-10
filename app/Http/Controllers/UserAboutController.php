<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAboutController extends Controller
{
    public function viewabout()
    {
    	return view('Front-Side.About.viewabout');
    }
}