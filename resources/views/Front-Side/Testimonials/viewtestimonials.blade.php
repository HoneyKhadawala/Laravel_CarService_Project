@extends('Front-Side.Master.base')

@section("pagetitle")
    Shop List Page
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
	<div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url({{ URL::asset('UserSide/assets/images/banner/bnr1.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Testimonial</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="\index">Home</a></li>
                    <li>Testimonial</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content bg-white">
            <!-- Team member -->
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="section-content">
						<div class="row" id="masonry">
							<div class="col-lg-4 col-md-6 col-sm-6 card-container">
								<div class="testimonial-2 m-b30">
                                    <div class="testimonial-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make. </p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-pic quote-left radius shadow"><img src="{{ URL::asset('UserSide/assets/images/testimonials/pic1.jpg') }}" alt="" width="100" height="100"></div>
                                        <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> 
									</div>
                                </div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 card-container">
								<div class="testimonial-2 m-b30">
                                    <div class="testimonial-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-pic quote-left radius shadow"><img src="{{ URL::asset('UserSide/assets/images/testimonials/pic2.jpg') }}" alt="" width="100" height="100"></div>
                                        <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> 
									</div>
                                </div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 card-container">
								<div class="testimonial-2 m-b30">
                                    <div class="testimonial-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-pic quote-left radius shadow"><img src="{{ URL::asset('UserSide/assets/images/testimonials/pic3.jpg') }}" alt="" width="100" height="100"></div>
                                        <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> 
									</div>
                                </div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 card-container">
								<div class="testimonial-2 m-b30">
                                    <div class="testimonial-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make. </p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-pic quote-left radius shadow"><img src="{{ URL::asset('UserSide/assets/images/testimonials/pic1.jpg') }}" alt="" width="100" height="100"></div>
                                        <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> 
									</div>
                                </div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 card-container">
								<div class="testimonial-2 m-b30">
                                    <div class="testimonial-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-pic quote-left radius shadow"><img src="{{ URL::asset('UserSide/assets/images/testimonials/pic2.jpg') }}" alt="" width="100" height="100"></div>
                                        <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> 
									</div>
                                </div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 card-container">
								<div class="testimonial-2 m-b30">
                                    <div class="testimonial-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-pic quote-left radius shadow"><img src="{{ URL::asset('UserSide/assets/images/testimonials/pic3.jpg') }}" alt="" width="100" height="100"></div>
                                        <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> 
									</div>
                                </div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 card-container">
								<div class="testimonial-2 m-b30">
                                    <div class="testimonial-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make. </p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-pic quote-left radius shadow"><img src="{{ URL::asset('UserSide/assets/images/testimonials/pic1.jpg') }}" alt="" width="100" height="100"></div>
                                        <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> 
									</div>
                                </div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 card-container">
								<div class="testimonial-2 m-b30">
                                    <div class="testimonial-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-pic quote-left radius shadow"><img src="{{ URL::asset('UserSide/assets/images/testimonials/pic2.jpg') }}" alt="" width="100" height="100"></div>
                                        <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> 
									</div>
                                </div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 card-container">
								<div class="testimonial-2 m-b30">
                                    <div class="testimonial-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-pic quote-left radius shadow"><img src="{{ URL::asset('UserSide/assets/images/testimonials/pic3.jpg') }}" alt="" width="100" height="100"></div>
                                        <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> 
									</div>
                                </div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 card-container">
								<div class="testimonial-2 m-b30">
                                    <div class="testimonial-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-pic quote-left radius shadow"><img src="{{ URL::asset('UserSide/assets/images/testimonials/pic3.jpg') }}" alt="" width="100" height="100"></div>
                                        <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> 
									</div>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Team member END -->
        </div>
    </div>
    <!-- Content END-->
@endsection
    
@section("js-section")

    <!-- JavaScript  files ========================================= -->
    <script src="{{ URL::asset('UserSide/assets/js/combining.js') }}"></script><!-- COMBINING JS  -->

@endsection