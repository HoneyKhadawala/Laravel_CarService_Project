@extends('Front-Side.Master.base')

@section("pagetitle")
    Detail About Car Page
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
                    <li><a href="/BuyCar">Car</a></li>
                    <li>Detail Car</li>
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
                            @foreach($cardetail as $item)
                                <div class="blog-post blog-grid ">
                                    <div class="dlab-post-media dlab-img-effect zoom-slow">
                                        <img src="{{ URL::asset('uploads/Model') }}/{{$item->Model_image}}" alt="">
                                    </div>
                                    <div class="dlab-post-info text-justify">
                                        <div class="dlab-post-title ">
                                            <h3 class="post-title">{{$item->Model_name}}</h3>
                                        </div>
                                        <div>
                                            <span><b value="{{$item->Company_Id}}">Company Name : </b>{{$item->Company_name}}</span>
                                        </div>
                                        @foreach($pricedata as $row)
                                        <div>
                                            <span><b value="{{ $row->City_Id }}">City : </b> {{ $row->City_name }} </span>
                                        </div>                                        
                                        <div>
                                            <span><b>OnRoad Price: </b> {{$row->Onroad_Price}}</span>
                                        </div>
                                        @endforeach                                    
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