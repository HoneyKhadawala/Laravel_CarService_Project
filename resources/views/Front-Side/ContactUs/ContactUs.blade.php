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

    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url({{ URL::asset('UserSide/assets/images/background/bg4.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Contact Us</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="\index">Home</a></li>
                    <li>Contact us</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="section-full content-inner bg-white contact-style-1">
			<div class="container">
                <div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
						<div class="icon-bx-wraper bx-style-1 p-a30 center">
							<div class="icon-xl text-primary m-b20"> <a href="#" class="icon-cell"><i class="ti-location-pin"></i></a> </div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-uppercase">Address</h5>
								<p>2<sup>nd</sup> Floor, 10-11, Nr. Shivam Cycle, Tadwadi Main Rd. , Surat</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
						<div class="icon-bx-wraper bx-style-1 p-a30 center">
							<div class="icon-xl text-primary m-b20"> <a href="#" class="icon-cell"><i class="ti-email"></i></a> </div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-uppercase">Email</h5>
								<p>info@karoninfotech.com <br/><br/><br/> <!-- info@industrycompany.com --></p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
						<div class="icon-bx-wraper bx-style-1 p-a30 center">
							<div class="icon-xl text-primary m-b20"> <a href="#" class="icon-cell"><i class="ti-mobile"></i></a> </div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-uppercase">Phone</h5>
								<p>+91 886 655 5469<br/> +91 960 127 7515<br/><br/></p>
							</div>
						</div>     
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
						<div class="icon-bx-wraper bx-style-1 p-a30 center">
							<div class="icon-xl text-primary m-b20"> <a href="#" class="icon-cell"><i class="ti-printer"></i></a> </div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-uppercase">Content title</h5>
								<p>+91 886 655 5469 <br/> +91 960 127 7515<br/><br/></p>
							</div>
						</div>
					</div>
				</div>
                <div class="row">
					<!-- Left part start -->
                    <div class="col-lg-6">
                        <div class="p-a30 bg-gray clearfix m-b30">
							<h2>Send Message Us</h2>
							<div class="dzFormMsg"></div>
							<form method="post" class="dzForm" action="https://autocare.dexignlab.com/xhtml/script/contact.php">
							<input type="hidden" value="Contact" name="dzToDo" >
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="dzName" type="text" required class="form-control" placeholder="Your Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group"> 
											    <input name="dzEmail" type="email" class="form-control" required  placeholder="Your Email Id" >
                                            </div>
                                        </div>
                                    </div>
									<div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="dzOther[Phone]" type="text" required class="form-control" placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>
									<div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="dzOther[Subject]" type="text" required class="form-control" placeholder="Subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="dzMessage" rows="4" class="form-control" required placeholder="Your Message..."></textarea>
                                            </div>
                                        </div>
                                    </div>
									<div class="col-lg-12">
										<div class="form-group">
											<div class="input-group">
												<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
												<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
											</div>
										</div>
									</div>
                                    <div class="col-lg-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Left part END -->
					<!-- right part start -->
                    <div class="col-lg-6 m-b30">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.3825624477!2d75.65046970649679!3d26.88544791796718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1500819483219" class="align-self-stretch" style="border:0; width:100%; min-height:100%;"  allowfullscreen></iframe>
                    </div>
                    <!-- right part END -->
                </div>
            </div>
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->

@endsection
    
@section("js-section")

    <!-- JavaScript  files ========================================= -->
    <script src="{{ URL::asset('UserSide/assets/js/combining.js') }}"></script><!-- COMBINING JS  -->
    <script src='../../www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha 
 -->
@endsection