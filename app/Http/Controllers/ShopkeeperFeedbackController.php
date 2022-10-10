<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestimonialModel;


class ShopkeeperFeedbackController extends Controller
{
    public function viewfeedback()
    {
    	$feedbackdata = TestimonialModel::all();
    	return view('Shopkeeper-Side.FeedBack.viewshopkeeperfeedback',compact("feedbackdata"));
    }
}
