<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
	
	public function loaddashboard()
	{
		if(session("islogin"))
		{
			if(session("islogin")=="no")
			{
				return redirect('/Login');
			}
		}
		else
		{
			return redirect('/Login');
		}
		return View('Admin-Side.Dashboard.dashboard');
	}
}