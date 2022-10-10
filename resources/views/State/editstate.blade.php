@extends('MasterPage.base')

@section("pagetitle")
	Add State Page
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
                                    <h4 class="mb-0 font-size-18">Add State</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="/State/view">View All State</a></li>
                                            <li class="breadcrumb-item active">Add State</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                             <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Add New State</h4>
                                        @if(session("Status"))

                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <i class="mdi mdi-check-all mr-2"></i>
                                                {{ session("Status") }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>

                                        @endif


                                        @foreach($statedata as $item)   
                                        <form action="/State/update" method="post" id="form1">
                                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                            <input type="hidden" name="id" value="{{$item->State_Id}}">
                                            
                                            <div class="form-group row mb-4">
                                                <label for="txtstatename" class="col-sm-3 col-form-label">State Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" value="{{ $item->State_Name }}" class="form-control" name="txtstatename" id="txtstatename">
                                                </div>
                                            </div>

                                            <div class="form-group row justify-content-end">
                                                <div class="col-sm-9">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary w-md">Update</button>
                                                    </div>
                                            </div>
                                        </form>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-3"></div>
                        </div>
                        <!-- end row -->

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
            $('#form1').validate({
                rules:
                {
                    txtstatename:
                    {
                        required:true 
                    }   
                },
                messages:
                {
                   txtstatename:
                    {
                        required:"Please enter state name"
                    }  
                }
            });
        </script>

@endsection