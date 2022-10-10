@extends('Front-Side.Master.base')

@section("pagetitle")
    Shop List Page
@endsection

@section('css-section')
		
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/css/combine.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/plugins/fontawesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/plugins/themify/themify-icons.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/css/style.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/css/templete.min.css')}}">
	<link class="skin"  rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/css/skin/skin-1.css')}}">
	
@endsection
    
@section("main-section")
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url({{ URL::asset('UserSide/assets/images/background/bg4.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Shop Portfolio</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="/index">Home</a></li>
                    <li><a href="/ServiceList">Service List</a></li>
                    <li>Service List Detail</li>
                </ul>
            </div>
                    </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="section-full content-inner bg-white">
            <!-- Portfolio -->
            <div class="container">
                <div class="clearfix">
                    <div id="masonry" class="row dlab-blog-grid-2">
                        <div class="post card-container col-lg-6 col-md-6 col-sm-6">
                            @foreach($displaycompanydata as $item)
                                <div class="blog-post blog-grid ">
                                    <div class="dlab-post-info text-justify">
                                        <div class="dlab-post-title ">
                                            <h3 class="post-title">{{$item->InsuranceCmp_Name}}</h3>
                                        </div>
                                        <div>
                                            <span><b>Description : </b>{{$item->Description}}</span>
                                        </div> 
                                        <div>
                                            <span><b>Email ID : </b>{{$item->Email_id}}</span>
                                        </div> 
                                        <div>
                                            <span><b>Contact No. : </b>{{$item->Contact_No}}</span>
                                        </div> 
                                        <div>
                                            <span><b>Office Address : </b>{{$item->Off_Address}}</span>
                                        </div>                                        
                                        <div>
                                            <span><b>Another Office Address : </b> {{$item->Off_Address2}}</span>
                                        </div>    
                                        <div>
                                            <span><b value="{{$item->City_Id}}">City : </b> {{$item->City_name}}</span>
                                        </div> 
                                        <div>
                                            <span><b>Landmark : </b>{{$item->Landmark }}</span>
                                        </div> 
                                        <div>
                                            <span><b>Pincode : </b>{{$item->Pincode}}</span>
                                        </div>                              
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Portfolio END -->
        </div>
        <!-- contact END -->
    </div>
    <!-- Content END-->
@endsection
    
@section("js-section")
<!-- JavaScript  files ========================================= -->
<script src="{{ URL::asset('UserSide/assets/js/combining.js')}}"></script><!-- COMBINING JS  -->

@endsection