<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CityModel;
use App\Models\StateModel;

class CityController extends Controller
{
	
	public function viewcity()
	{
		$citydata = CityModel::select("*")
					->leftjoin("tbl_state","tbl_state.State_Id","=","tbl_city.State_Id")
					->get();
		return View('Admin-Side.City.viewcity',compact("citydata"));//compact is used for displaying permanent data
	}
	public function addcity()
	{
		$statedata = StateModel::all();
		return View('Admin-Side.City.addcity',compact("statedata"));
	}
	public function insertCity(Request $request)
	{
		$obj =  new CityModel;
		$obj->City_name = $request->txtcityname;
		$obj->State_Id  = $request->txtstate;
		$obj->save();
		return redirect('/City/add')->with("status","Data Inserted!"); //tempory data displey

		// echo "insert";
	}

	public function deleteCity(Request $request)
	{
		$delete= $request->deleteid;
		CityModel::where("City_Id","=",$delete)->delete();
		return redirect('/City/view')->with("status","Data Deleted!");
	}

	// Updating form

	public function editcity($id)
	{
		$statedata = StateModel::all();
		$citydata = CityModel::select("*")
					->where("City_Id","=",$id)
					->get();
		return view('Admin-Side.City.editcity',compact("statedata","citydata"));
	}

	public function updatecity(Request $request)
	{
		$obj = CityModel::where("City_Id","=",$request->id)->first();
		$obj->City_name = $request->txtcityname;
		$obj->State_Id  = $request->txtstate;
		$obj->save();
		return redirect('/City/view')->with("status","Data Inserted!");
	}

	// Updating form
}