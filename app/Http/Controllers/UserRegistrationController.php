<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\CityModel;
use Mail;
use App\Mail\AcceptEmail;
use Session;
class UserRegistrationController extends Controller
{
        public function insertuser(Request $request)
        {   

            $six_digit_random_number = mt_rand(100000, 999999);

            $obj = new UserModel;
            // $obj-> = $request-> ;
            $obj->User_name = $request->txtusername;
            $obj->Email_id = $request->txtemailid;
            $obj->password = $request->txtuserpass;
            $obj->Contact_No = $request->txtusercontact;
            $obj->City_Id = $request->txtusercity;
            // dd($request->txtusercity);
            $obj->OTP = $six_digit_random_number;
            $obj->save();

            $lastid=$obj->User_ID;
            $request->session()->put('lastuser',$lastid);
            $sendto = [$obj->Email_id];
            $data = [
                    'subject' => "Your OTP Has Been Send Your Email",
                    'viewname' => 'mail.otpsendmail',
                    'OTP' => $six_digit_random_number   
            ];
            Mail::to($sendto)->send(new AcceptEmail($data));

            return redirect('/UserOTPpage');
            // echo  'insert';
            //echo $request->txtusername;


        }   

        public function insertotp()
        {
            return view('Front-Side.Login.otppage');
        }

        public function otpcheck(Request $request)
        {
            if($request->session()->has('lastuser'))
            {
                $last=Session::get('lastuser');
            }
           
            $getiddata=UserModel::where('User_ID',$last)->select('OTP')->first();

            $otp=$request->txtotp;
            $check=$getiddata->OTP;
            if($otp==$check)
            {   

                $verify=UserModel::where('User_ID',$last)->update(['IsVerify' =>'yes']);
                return redirect('UserLogin');
            }
            else
            {
                return redirect('UserLogin');
            }
        }

}
