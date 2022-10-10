@extends('MasterPage.base')

@section("pagetitle")
	Add Service Page
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
                                    <h4 class="mb-0 font-size-18">Add Service</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="\Service\view">View All Service</a></li>
                                            <li class="breadcrumb-item active">Add new Service</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Include New Service</h4>

                                        @if(session("status"))
                                           
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <i class="mdi mdi-check-all mr-2"></i>
                                                {{ session("status") }}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                        
                                        @endif

                                        <form action="/Service/insert" method="post" id="fill-form">
                                             <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="txtservicename">Name</label>
                                                        <input type="text" class="form-control" id="txtservicename" name="txtservicename">
                                                    </div>
                                                </div>
                                                 <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="txtservicetype">Type</label>
                                                        <input type="text" class="form-control" id="txtservicetype" name="txtservicetype">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="txtservicedesc">Desciption</label>
                                                        <input type="text" class="form-control" id="txtservicedesc" name="txtservicedesc">
                                                    </div>
                                                </div>
                                            </div>
                                                
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2"></div>
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
                    txtservicename:
                    {
                        required:true 
                    },
                    txtservicetype:
                    {
                        required:true 
                    },
                    txtservicedesc:
                    {
                        required:true 
                    }   
                },
                messages:
                {
                   txtservicename:
                    {
                        required:"Please enter service name"
                    },
                    txtservicetype:
                    {
                        required:"Enter service type"
                    },
                    txtservicedesc:
                    {
                        required:"Please enter description" 
                    }  
                }
            });
        </script>

@endsection