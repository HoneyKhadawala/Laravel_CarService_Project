@extends('MasterPage.base')

@section("pagetitle")
	Edit Model Page
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
                                    <h4 class="mb-0 font-size-18">Edit Model</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="\Model\view">View All Model</a></li>
                                            <li class="breadcrumb-item active">Edit Model</li>
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
                                        <h4 class="card-title mb-4">Edit Model</h4>

                                         @if(session("status"))

                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <i class="mdi mdi-check-all mr-2"></i>
                                                {{ session("status") }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>

                                        @endif
                                        
                                        @foreach($editmodeldata as $item)
                                        <form enctype="multipart/form-data" action="/Model/update" method="post" id="fill-form">
                                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                            <input type="hidden" name="id" value="{{ $item->Model_Id }}">
                                            <input type="hidden" name="oldimg" value="{{ $item->Model_image }}">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="txtcompany">Company Name</label>
                                                        <select class="btn btn-secondary dropdown-toggle col-12" type="button" id="txtcompany" data-toggle="dropdown" name="txtcompany" aria-haspopup="true" aria-expanded="false">
                                                            @foreach($editcompanydata as $row)
                                                                <option value="{{ $row->Company_Id}}">{{ $row->Company_name}}</option>
                                                            @endforeach
                                                        </select> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="txtmodelname">Model name</label>
                                                        <input type="text" class="form-control" id="txtmodelname" name="txtmodelname" value="{{ $item->Model_name }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="uploadfile">Model Image</label>
                                                        <input type="file" class="form-control" id="uploadfile" name="uploadfile">
                                                        <img src= "{{ URL::asset('uploads/Model') }}/{{ $item->Model_image }}" width="100" height="100"></td>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary w-md">Update</button>
                                            </div>
                                        </form>
                                        @endforeach
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
        
@endsection