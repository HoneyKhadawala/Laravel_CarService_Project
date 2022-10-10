<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from autocare.dexignlab.com/xhtml/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Mar 2021 06:24:42 GMT -->
<head>
	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="AutoCare is well designed creating websites of automotive repair shops, stores with spare parts and accessories for car repairs, car washes, car danting and panting, service stations, car showrooms painting, major auto centers and other sites related to cars and car services." />
	<meta property="og:title" content="Auto Care - Car Services Template" />
	<meta property="og:description" content="AutoCare is well designed creating websites of automotive repair shops, stores with spare parts and accessories for car repairs, car washes, car danting and panting, service stations, car showrooms painting, major auto centers and other sites related to cars and car services." />
	<meta property="og:image" content="social-image.png" />
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title><?php echo $__env->yieldContent('pagetitle'); ?></title>

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->


	<!-- FAVICONS ICON -->
	<link rel="icon" href="<?php echo e(URL::asset('UserSide/assets/images/favicon.ico" type="image/x-icon')); ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(URL::asset('UserSide/assets/images/favicon.png')); ?>" />

	<?php echo $__env->yieldContent("css-section"); ?>

	<style>
		.bt-buy-now,.bt-support-now,.switcher-btn-bx
		{
			display: none !important;
		}
		img.round
		{
			height: 2.5vw;
			width: 2.5vw;
			border-radius: 10vw; 
		}

	</style>

</head>
<body id="bg">
	<div id="loading-area"></div>
	<div class="page-wraper">
		<!-- header -->
	    <header class="site-header header mo-left header-style-1">
	        <!-- top bar -->
	        <div class="top-bar">
	            <div class="container">
	                <div class="row d-flex justify-content-between">
	                    <div class="dlab-topbar-left"> </div>
	                    <div class="dlab-topbar-right">
	                        <ul class="social-bx list-inline pull-right">
	                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
	                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
	                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
	                            <li><a href="javascript:void(0);" class="fa fa-google-plus"></a></li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- top bar END-->
	        <!-- main header -->
	        <div class="sticky-header header-curve main-bar-wraper navbar-expand-lg">
	            <div class="main-bar bg-primary clearfix ">
	                <div class="container clearfix">
	                    <!-- website logo -->
	                    <div class="logo-header mostion"><a href="index-2.html"><img src="<?php echo e(URL::asset('UserSide/assets/images/logo.png')); ?>" width="193" height="89" alt=""></a></div>
	                    <!-- nav toggle button -->
						<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span></span>
							<span></span>
							<span></span>
						</button>
	                    <!-- extra nav -->
	                    <div class="extra-nav">
	                        <div class="extra-cell">
	                            <button id="quik-search-btn" type="button" class="site-button bg-primary-dark"><i class="fa fa-search"></i></button>
	                        </div>
	                    </div>
	                    <!-- Quik search -->
	                    <div class="dlab-quik-search bg-primary">
	                        <form action="#">
	                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
	                            <span id="quik-search-remove"><i class="fa fa-remove"></i></span>
	                        </form>
	                    </div>
	                    <!-- main nav -->
	                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
	                        <ul class="nav navbar-nav nav-style">
	                            <li> <!-- class="active" -->
	                            	<a href="/index">Home</a>
	                            </li>
	                            <li> 
	                            	<a href="/About">About</i></a>
	                            </li>
	                            <li> 
	                            	<a href="/ShopList">Shop</a>
	                            </li>
								<li> 
									<a href="/BuyCar">Buy Car</a>	                            
								</li>
								<li> 
									<a href="/InsuranceCompany">Insurance Company</a>	                            
								</li>

	                            <li> 
	                            	<a href="\Testimonials">Testimonials</a> <!-- Feedback Page--> 
	                            </li>
	                            <li> 
	                            	<a href="\ContactUs">Contact us</a>
	                            </li>
	                            <?php if(session("User_name")): ?>
	                            <li>
	                            		<a href="javascript:;">
                                        <?php if(session("User_Profile")): ?>
                                    		<img src="<?php echo e(URL::asset('UserUpload/MyProfile/')); ?>/<?php echo e(session('User_Profile')); ?>" alt="" class="round">
                                    	<?php else: ?>
                                    		<img src="<?php echo e(URL::asset('UserUpload/MyProfile/usericon.png')); ?>" alt="" class="round">
                                    	<?php endif; ?>
                                        <?php echo e(session("User_name")); ?><i class="fa fa-chevron-down"></i></a> 
									<!-- <img class="rounded-circle header-profile-user" 
                                    alt="Header Avatar"> -->
	                                <ul class="sub-menu">
	                                    <li> 
	                                    	<a href="\UserChangePassword">Change Password </a>
	                                    </li>
	                                    <li> 
	                                    	<a href="/MyProfile">My Profile</a>
	                                    </li>
	                                    <li>
	                                    	<a href="/UserLogout">Logout</a>
	                                    </li>
	                                </ul>
	                            </li>
	                            <?php else: ?>
	                            <li>
	                            	<a href="\UserLogin">Sign In</a>
	                            </li>
	                            <?php endif; ?>	                      
	                        </ul>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- main header END -->
	    </header>
	    <!-- header END -->

	     <?php echo $__env->yieldContent("main-section"); ?>

	    <!-- Footer -->
	    <footer class="site-footer">
	        <!-- newsletter part -->
	        <div class="bg-primary dlab-newsletter">
	            <div class="container equal-wraper">
					<form class="dzSubscribe" action="https://autocare.dexignlab.com/xhtml/script/mailchamp.php" method="post">
						<div class="row">
	                        <div class="col-lg-4 col-md-4 col-sm-12">
	                            <div class="icon-bx-wraper equal-col p-t30 p-b20 left">
	                                <div class="icon-lg text-white radius">
										<i class="ti-email"></i>
									</div>
	                                <div class="icon-content"> <strong class="text-black text-uppercase font-18">Subscribe</strong>
	                                    <h2 class="dlab-tilte text-uppercase">Our Newsletter</h2>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-lg-4 col-md-4 col-sm-12">
	                            <div class="dzSubscribeMsg"></div>
								<div class="input-group equal-col p-t40  p-b10">
	                                <input name="dzEmail" required placeholder="Email address" required="required" class="form-control" type="text">
	                            </div>
	                        </div>
	                        <div class="col-lg-3 col-md-3 col-sm-12 offset-lg-1 offset-md-1">
	                            <div class="equal-col p-t40 p-b10 skew-subscribe">
	                                <button name="submit" value="Submit" type="submit" class="site-button-secondry button-skew z-index1"> <span>Subscribe</span><i class="fa fa-angle-right"></i> </button>
	                            </div>
	                        </div>
						</div>
					</form>
	            </div>
	        </div>

	        <!-- footer top part -->
	        <div class="footer-top">
	            <div class="container">
	                <div class="row">
	                    <div class="col-lg-4 col-md-4 col-sm-4 footer-col-4">
	                        <div class="widget widget_about">
	                            <div class="logo-footer"><img src="<?php echo e(URL::asset('UserSide/assets/images/logo.png')); ?>" alt=""></div>
	                            <p><strong>Auto Care</strong> ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore agna aliquam erat . wisi enim ad minim veniam, quis tation. sit amet, consec tetuer.ipsum dolor sit amet, consectetuer.</p>
	                            <ul class="dlab-social-icon dez-border">
	                                <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
	                                <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
	                                <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
	                                <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
	                            </ul>
	                        </div>
	                    </div>
	                    <div class="col-lg-4 col-md-4 col-sm-4 footer-col-4">
	                        <div class="widget widget_services">
	                            <h4 class="m-b15 text-uppercase">Our services</h4>
	                            <div class="dlab-separator-outer m-b10">
	                                <div class="dlab-separator bg-white style-skew"></div>
	                            </div>
	                            <ul>
	                                <li><a href="engine-diagnostics.html">Engine Diagnostics</a></li>
	                                <li><a href="lube-oil-and-filters.html">Lube, Oil and Filters</a></li>
	                                <li><a href="belts-and-hoses.html">Belts and Hoses</a></li>
	                                <li><a href="air-conditioning.html">Air Conditioning</a></li>
	                                <li><a href="brake-repair.html">Brake Repair</a></li>
	                                <!-- <li><a href="tire-and-wheel-services.html">Tire And Wheel</a></li> -->
	                            </ul>
	                        </div>
	                    </div>
	                    <div class="col-lg-4 col-md-4 col-sm-4 footer-col-4">
	                        <div class="widget widget_getintuch">
	                            <h4 class="m-b15 text-uppercase">Contact us</h4>
	                            <div class="dlab-separator-outer m-b10">
	                                <div class="dlab-separator bg-white style-skew"></div>
	                            </div>
	                            <ul>
	                                <li><i class="ti-location-pin"></i><strong>address</strong> 2<sup>nd</sup> Floor, 10-11, Near Shivam Cycle, Tadwadi Main Rd. , Surat
	                                 </li>
	                                <li><i class="ti-mobile"></i><strong>phone</strong>8866555469 <!-- (24/7 Support Line) --></li>
	                                <li><i class="ti-email"></i><strong>email</strong>info@karoninfotech.com</li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>	
	            </div>
	        </div>

	        <!-- footer bottom part -->
	        <div class="footer-bottom footer-line">
	            <div class="container">
	                <div class="row">
	                    <div class="col-lg-4 col-md-4 text-left"> 
							<span>© Copyright 2020</span>
						</div>
						<div class="col-lg-4 col-md-4 text-center"> 
							<span> Design With <i class="ti-heart text-primary heart"></i> By Honey Khadawala </span> 
						</div>
						<div class="col-lg-4 col-md-4 text-right"> 
							<a href="\About"> About Us</a>
							<a href="\ContactUs"> Contact Us</a>
						</div>
	                </div>
	            </div>
	        </div>
	    </footer>
	    <!-- Footer END-->

	    <!-- scroll top button -->
	    <button class="scroltop fa fa-arrow-up style5" ></button>

	</div>

	<?php echo $__env->yieldContent("js-section"); ?>
</body>
</html><?php /**PATH D:\ProjectWork\CarProject\resources\views/Front-Side/Master/base.blade.php ENDPATH**/ ?>