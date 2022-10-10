@extends('Front-Side.Master.base')

@section("pagetitle")
    Services Page
@endsection

@section("css-section")		

	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="UserSide/assets/css/combine.css">
	<link rel="stylesheet" type="text/css" href="UserSide/assets/plugins/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="UserSide/assets/plugins/themify/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="UserSide/assets/css/style.min.css">
	<link rel="stylesheet" type="text/css" href="UserSide/assets/css/templete.min.css">
	<link class="skin"  rel="stylesheet" type="text/css" href="UserSide/assets/css/skin/skin-1.css">

@endsection
	
@section("main-section")
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(UserSide/assets/images/background/bg4.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Services</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="\index">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="section-full content-inner bg-white">
            <!-- Services  -->
            <div class="container">
                <div class="row ">
                    @foreach($servicelistdata as $row)
                    <div class="col-lg-4 col-md-6 col-sm-6 m-b30" name="id">
                        <div class="dlab-box">
                            <!-- <div class="dlab-media"> <a href="#"><img src="UserSide/assets/images/our-work/pic1.jpg" alt=""></a> </div> -->
                            <div class="dlab-info p-a30 border-1">
                                <h4 class="dlab-title m-t0">{{$row->Service_name}}</h4>
                                <p>Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius  </p>
                                <a href="#" class="site-button"  onclick="window.location='/DetailServiceList/{{ $row->Service_Id }}'">More</a> </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Services END -->
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
@endsection


@section("js-section")
<!-- JavaScript  files ========================================= -->
<script src="UserSide/assets/js/combining.js"></script><!-- COMBINING JS  -->
@endsection

