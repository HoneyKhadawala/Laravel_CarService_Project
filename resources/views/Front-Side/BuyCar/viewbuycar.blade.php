@extends('Front-Side.Master.base')

@section("pagetitle")
    Buy Car Page
@endsection



@section('css-section')	

	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/css/combine.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/plugins/fontawesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/plugins/themify/themify-icons.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/css/style.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/css/templete.min.css') }}">
	<link class="skin"  rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/css/skin/skin-1.css') }}">
	

@endsection


@section("main-section")

<!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url({{ URL::asset('UserSide/assets/images/background/bg4.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Buy Car</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="\index">Home</a></li>
                    <li>Buy Car</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content">
            <!-- Dent Paint packages -->
            <div class="section-full bg-white content-inner">
                <div class="container">
					<div class="section-head text-center text-black">
                        <h2 class="text-uppercase">Buy New Car</h2>
                        <span class="title-small">Best Price</span>
                    </div>
					<div class="row">
						@foreach($cardata as $row)
						<div class="col-lg-3 col-md-4 col-sm-6 m-b30">
							<div class="paint-service">
								
								<img src="{{ URL::asset('uploads/Model') }}/{{$row->Model_image}}" width="600" height="500" alt="car img">
								<div class="services-content">
									<span><b class="text-uppercase m-a0">Car : </b>{{$row->Model_name}}</span><br/>
									<span><b class="text-uppercase m-a0" value="{{$row->Company_Id}}">Company : </b>{{$row->Company_name}}</span><br/>
									<button class="site-button outline red col-12 mt-2" type="button" onclick="window.location='/DetailBuyCar/{{$row->Model_Id}}'">Check</button>
								</div>
								
							</div>
						</div>
						@endforeach						
					</div>
				</div>
            </div>
            <!-- Pricing Table END -->
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
	
@endsection

@section("js-section")

<!-- JavaScript  files ========================================= -->
<script src="{{ URL::asset('UserSide/assets/js/combining.js') }}"></script><!-- COMBINING JS  -->
@endsection

<!-- //home,insurance company, about, contact us, my account--change password--my profile--logout,
//shop,testimonials, buy car -->