@extends('Front-Side.Master.base')

@section("pagetitle")
    Home Page
@endsection



@section('css-section')	

<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/css/combine.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/plugins/fontawesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/plugins/themify/themify-icons.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/css/style.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/css/templete.min.css') }}">
	<link class="skin"  rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/css/skin/skin-1.css') }}">
	<!-- Revolution Slider Css -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/plugins/revolution/css/revolution.min.css') }}">

	<style type="text/css">
		.dlab-img-effect
		{
			border-radius: 13vw;
			text-align: center;
			margin-bottom: 2vw;
			margin-left: 12vw;
		  	margin-right: auto;
		}
		.dlab-img-effect img
		{
			width: 260px;
			height: 260px; 
		}
		.dlab-img-effect .fa
		{
			font-size: 4vw;	
		}
	</style>

@endsection


@section("main-section")

	<!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url({{ URL::asset('UserSide/assets/images/background/bg4.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">My Profile</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="\index">Home</a></li>
                    <li>MyProfile</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="row">
        	<div class="col-3"></div>
        	<div class="col-6">
		        <!-- contact area -->
		        <div class="section-full content-inner">
		            <!-- Product -->
		            <div class="container center_div">
		            	
		            	@foreach($userdata as $row)
			                <form class="profile-form" method="post" action="/UserProfileUpdate">
			                	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
			                	<input type="hidden" name="id" value="{{$row->User_ID}}">
		                        <!-- <input type="hidden" name="oldimg" value="{{$row->User_Profile}}"> -->
		                        @if(session("status"))
				                    <div class="alert alert-success alert-dismissible fade show" role="alert">
				                        <i class="mdi mdi-check-all mr-2"></i>
				                        {{ session("status") }}
				                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                            <span aria-hidden="true">×</span>
				                        </button>
				                    </div>
				                @endif
	                            <div class="row">
	                            	<div class="dlab-box">
		                                    <div class="dlab-media dlab-img-effect" for="txtuserprofile"> 
		                                    	@if(session("User_Profile"))
		                                    		<img src="{{ URL::asset('UserUpload/MyProfile/')}}/{{ session('User_Profile')}}" alt="">
		                                    	@else
		                                    		<img src="{{ URL::asset('UserUpload/MyProfile/usericon.png') }}" alt="">
		                                    	@endif
		                                        <div class="dlab-info-has p-a20 bg-black">
		                                            <div class="dlab-info-has-text">Change Profile</div>
		                                            <a href="javascript:void(0);" class="fa fa-picture-o icon-bx-xs"></a> <!-- id="txtuserprofile" name="txtuserprofile" --> 
		                                        </div>
		                                    </div>
		                                </div>
		                        </div>
	                            <div class="row">
	                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
	                                	<label for="editusername">Name</label>
	                                    <input type="text" class="form-control" name="editusername" id="editusername" value="{{session('User_name')}}">
	                                </div>
	                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
	                                	<label for="txtusercontactno">Contact No.</label>
	                                    <input type="text" class="form-control" name="txtusercontactno" id="txtusercontactno" value="{{session('Contact_No')}}">
	                                </div>
	                            </div>
                                <div class="form-group">
                                	<label for="txtuseremail">Email</label>
                                    <input type="text" name="txtuseremail" id="txtuseremail" class="form-control" value="{{session('Email_id')}}">
	                            </div>

		                        <div class="form-group">
                                    <label for="txtcity">City</label>
	                                <select id="txtcity" name="txtcity" class="btn col-12 form-control" >
	                                	@foreach($citydata as $item)
	                                		<option  value="{{session('City_Id')}}"  @if($row->City_Id == $item->City_Id) selected @endif >{{ $item->City_name }}</option>
	                                    @endforeach 
	                                </select>
                                </div>	
	                            <div class="form-group row">
	                            	<div class="col-6">
										<button class="site-button button-lg btn-block" type="button">Cancel</button>
									</div> 
									<div class="col-6">
										<button class="site-button button-lg btn-block" type="submit">Update</button>
									</div>
								</div>
			                </form>
		                @endforeach
		                <div class="dlab-divider bg-gray-dark text-gray-dark icon-center"><i class="fa fa-circle bg-white text-gray-dark"></i></div>
		           </div>
		            <!-- Product END -->
		        </div>
		        <!-- contact area  END -->
	        </div>
        	<div class="col-3"></div>
    	</div>
    </div>
	<!-- Content END-->

@endsection

@section("js-section")

<!-- JavaScript  files ========================================= -->
<script src="{{ URL::asset('UserSide/assets/js/combining.js') }}"></script><!-- COMBINING JS  -->
@endsection

<!-- //home,insurance company, about, contact us, my account--change password--my profile--logout,
//shop,testimonials, buy car -->