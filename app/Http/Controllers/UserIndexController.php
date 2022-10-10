<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserIndexController extends Controller
{
    public function viewindex()
    {
    	return view('Front-Side.Index.index');
    }
}