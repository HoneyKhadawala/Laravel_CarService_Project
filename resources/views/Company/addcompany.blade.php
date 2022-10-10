@extends('MasterPage.base')

@section("pagetitle")
	Add Company Page
@endsection

@section('css-section')
	<!-- Bootstrap Css -->
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ URL::asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ URL::asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">

@endsection

@section("main-section")
	 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Add New Company</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="/Company/view">View All Company</a></li>
                                            <li class="breadcrumb-item active">Add new Company</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                             <div class="col-2"></div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Add Company</h4>

                                         @if(session("status"))
                                           
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <i class="mdi mdi-check-all mr-2"></i>
                                            {{ session("status") }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        @endif

                                        <!-- Form Start -->
                                        <form enctype="multipart/form-data" action="/Company/insert" method="post" id="fill-form">
                                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="txtcompanyname">Company name</label>
                                                        <input type="text" class="form-control" id="txtcompanyname" name="txtcompanyname">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row mb-4">
                                                <div class="col-12">
                                                    <label for="companylogo" class="col-form-label col-lg-2">Attached Files</label>
                                                    <input name="companylogo" id="companylogo" type="file" multiple />
                                                </div>
                                                               
                                                

                                            </div>
                                                    
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>

                                        </form>
                                        <!-- End Form -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-2"></div>
                        </div>
                        <!-- end row -->                        
                    </div> <!-- container-fluid -->
                </div>
@endsection

@section("js-section")
 <!-- JAVASCRIPT -->
        <script src="{{URL::asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{URL::asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{URL::asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{URL::asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{URL::asset('assets/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{URL::asset('assets/js/app.js')}}"></script>
        <script src="{{URL::asset('assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/additional-methods.min.js')}}"></script>
        <script>
            $('#fill-form').validate({
                rules:
                {
                    txtcompanyname:
                    {
                        required:true 
                    },  
                    companylogo:
                    {
                        required:true 
                    }
                },
                messages:
                {
                   txtcompanyname:
                    {
                        required:"Please enter company name"
                    },
                    companylogo:
                    {
                        required:"Upload Logo "
                    }  
                }
            });
        </script>

@endsection