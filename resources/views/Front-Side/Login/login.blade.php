<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from autocare.dexignlab.com/xhtml/login-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Mar 2021 06:26:10 GMT -->
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

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ URL::asset('UserSide/assets/images/favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('UserSide/assets/images/favicon.png') }}" />
    
    <!-- PAGE TITLE HERE -->
    <title>Auto Care - Car Services Template</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
        
    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/css/combine.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/plugins/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/plugins/themify/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/css/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/css/templete.min.css') }}">
    <link class="skin"  rel="stylesheet" type="text/css" href="{{ URL::asset('UserSide/assets/css/skin/skin-1.css') }}">
    <style>
        .bt-buy-now,.bt-support-now,.switcher-btn-bx
        {
            display: none !important;
        }
        a.gray:hover
        {
            background: red;
            color: #fff;
        }
    </style>

</head>
<body id="bg" class="full-boxed">
<div id="loading-area"></div>
<div class="page-wrapers">
    <!-- Content -->
    <div class="page-content dlab-login bg-secondry">
        <div class="top-head text-center logo-header">
            <a href="index-2.html">
                <img src="{{ URL::asset('UserSide/assets/images/logo.png') }}" alt=""/>
            </a>
        </div>
        <div class="login-form">
            <div class="tab-content nav">
                <div id="login" class="tab-pane active text-center">

                    @if(session("status"))
                               
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="mdi mdi-check-all mr-2"></i>
                            {{ session("status") }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    @endif

                    <form class="p-a30 dlab-form" action="/UserCheckLogin" method="post">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">  
                        <h3 class="form-title m-t0">Sign In</h3>
                        <div class="dlab-separator-outer m-b5">
                            <div class="dlab-separator bg-primary style-liner"></div>
                        </div>
                        <p>Enter your e-mail address and your password. </p>
                        <div class="form-group">
                            <input required="" class="form-control" placeholder="User Email" type="text" id="textemail" name="textemail" />
                        </div>
                        <div class="form-group">
                            <input required="" class="form-control " placeholder="Type Password" type="password" name="textpassword" id="textpassword" />
                        </div>
                        <div class="form-group text-left">
                            <a class="site-button outline gray" data-toggle="tab" onclick="window.location='/index'">Cancel</a>
                            <button class="site-button m-r5 dz-xs-flex pull-right" type="Submit">Login</button>

                            <div class="m-t20">
                                <label class="m-b0">
                                    <input id="check1" type="checkbox">
                                    <label for="check1">Remember me</label>
                                </label>
                                <a data-toggle="tab" href="#forgot-password" class="m-l10"><i class="fa fa-unlock-alt"></i> Forgot Password</a>
                            </div>
                        </div>
                        <div class="dz-social clearfix">
                            <h5 class="form-title m-t5 pull-left">Sign In With</h5>
                            <ul class="dlab-social-icon dez-border pull-right dlab-social-icon-lg text-white">
                                <li><a class="fa fa-facebook  fb-btn" href="javascript:;" target="bank"></a></li>
                                <li><a class="fa fa-twitter  tw-btn" href="javascript:;" target="bank"></a></li>
                                <li><a class="fa fa-linkedin link-btn" href="javascript:;" target="bank"></a></li>
                                <li><a class="fa fa-google-plus  gplus-btn" href="javascript:;" target="bank"></a></li>
                            </ul>
                        </div>
                    </form>
                    <div class="bg-primary p-a15 bottom">
                        <a data-toggle="tab" href="#developement-1" class="text-white">Create an account</a>
                    </div>
                </div>
                <div id="forgot-password" class="tab-pane fade">
                    <form class="p-a30 dlab-form text-center">
                        <h3 class="form-title m-t0">Forget Password ?</h3>
                        <div class="dlab-separator-outer m-b5">
                            <div class="dlab-separator bg-primary style-liner"></div>
                        </div>
                        <p>Enter your e-mail address below to reset your password. </p>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="Email Id" type="text"/>
                        </div>
                        <div class="form-group text-left"> <a class="site-button outline gray" data-toggle="tab" href="#login">Back</a>
                            <button class="site-button pull-right">Submit</button>
                        </div>
                    </form>
                </div>
                <div id="developement-1" class="tab-pane fade">
                    <form class="p-a30 dlab-form text-center text-center" action="/Registration" method="post">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"> 
                        <h3 class="form-title m-t0">Sign Up</h3>
                        <div class="dlab-separator-outer m-b5">
                            <div class="dlab-separator bg-primary style-liner"></div>
                        </div>
                        <p>Enter your personal details below: </p>
                        <!-- <div class="form-group">
                            <input name="txtuserfullname" id="txtuserfullname" required="" class="form-control" placeholder="Full Name" type="text"/>
                        </div> -->
                        <div class="form-group">
                            <input name="txtusername" id="txtusername" required="" class="form-control" placeholder="User Name" type="text"/>
                        </div>
                        <div class="form-group">
                            <input name="txtemailid" id="txtemailid" required="" class="form-control" placeholder="Email Id" type="text"/>
                        </div>

                        <div class="form-group">
                            <input name="txtusercontact" id="txtusercontact" required="" class="form-control" placeholder="Contact No" type="password"/>
                        </div>
                        
                        <div class="form-group">
                            <input name="txtuserpass" id="txtuserpass" required="" class="form-control" placeholder="Password" type="password"/>
                        </div>
                        <div class="form-group">
                            <select class="btn btn-secondary dropdown-toggle col-12" type="button" id="txtusercity" data-toggle="dropdown" name="txtusercity" aria-haspopup="true" aria-expanded="false">
                              @foreach($citydata as $row)
                               <option value="{{ $row->City_Id}}">{{ $row->City_name }}</option>
                                @endforeach
                            </select>                
                        </div>
                        <div class="m-b30">
                            <input id="check2" type="checkbox"/>
                            <label for="check2">I agree to the <a href="#">Terms of Service </a>& <a href="#">Privacy Policy</a> </label>
                        </div>
                        <div class="form-group text-left "> 
                            <a class="site-button outline gray" data-toggle="tab" href="#login">Back</a>
                            <button class="site-button pull-right" type="Submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="bottom-footer text-center text-white">
            <p><script>document.write(new Date().getFullYear())</script> © Develop for <i class="mdi mdi-heart text-danger"></i> College Name. </p>
        </div>
    </div>
    <!-- Content END-->
</div>
<!-- JavaScript  files ========================================= -->
<script src="{{ URL::asset('UserSide/assets/js/combining.js') }}"></script><!-- COMBINING JS  -->
</body>

<!-- Mirrored from autocare.dexignlab.com/xhtml/login-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Mar 2021 06:26:10 GMT -->
</html>
