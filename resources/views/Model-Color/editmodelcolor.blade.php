@extends('MasterPage.base')

@section("pagetitle")
	Edit Model Color Page
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
                        <h4 class="mb-0 font-size-18">Edit Model Color</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="/ModelColor/view">View All Model Color</a></li>
                                <li class="breadcrumb-item active">Edit Model Color</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <!-- <div class="col-lg-1"></div> -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Form of Model Color</h4>
                            @if(session("status"))
                               
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-check-all mr-2"></i>
                                {{ session("status") }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            @endif

                            @foreach($getmodelcolor as $item)
                            <form id="form1" enctype="multipart/form-data" method="post" action="/ModelColor/update">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <input type="hidden" name="id" value="{{$item->ModelColor_Id}}">
                                <input type="hidden" name="oldimg1" value="{{$item->Image1}}">
                                <input type="hidden" name="oldimg2" value="{{$item->Image2}}">
                                <input type="hidden" name="oldimg3" value="{{$item->Image3}}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtselectmodelname">Model Name</label>
                                            <select id="txtselectmodelname" name="txtselectmodelname" class="btn btn-secondary dropdown-toggle col-12" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                @foreach($getmodeldata as $row)
                                                <option value="{{ $row->Model_Id }}" @if($item->Model_Id == $row->Model_Id) selected @endif>{{$row['Model_name']}}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtmodelcolor">Color</label>
                                            <input type="text" class="form-control" id="txtmodelcolor" name="txtmodelcolor" value="{{$item->Color}}">
                                        </div>
                                    </div>
                                </div>                                
                            
                                <div class="row mb-4">
                                    <div class="col-4">
                                        <label for="imgfrontviewupload" class="col-form-label">Front View</label><br/>
                                        <button type="button" class="btn btn-light waves-effect waves-light w-sm">
                                            <div class="fallback">
                                                <input name="imgfrontviewupload" id="imgfrontviewupload" type="file" multiple />
                                                <i class="mdi mdi-upload d-block font-size-16"></i>Upload                                             
                                            </div>
                                            <img src="{{ URL::asset('uploads/Model-Color') }}/{{$item->Image1}}" width="100" height="100">
                                        </button>
                                    
                                    </div>                                            
                                    <div class="col-4">
                                        <label for="imgsideviewupload" class="col-form-label">Side View</label><br/>
                                        <button type="button" class="btn btn-light waves-effect waves-light w-sm">
                                            <div class="fallback">
                                                <input name="imgsideviewupload" id="imgsideviewupload" type="file" multiple />
                                                <i class="mdi mdi-upload d-block font-size-16"></i> Upload
                                            </div>
                                            <img src="{{ URL::asset('uploads/Model-Color') }}/{{$item->Image2}}" width="100" height="100">
                                        </button>
                                    
                                    </div>
                                    
                                    <div class="col-4">
                                        <label for="imgbackviewupload" class="col-form-label">Back View</label><br/>
                                        <button type="button" class="btn btn-light waves-effect waves-light w-sm">
                                            <div class="fallback">
                                                <input name="imgbackviewupload" id="imgbackviewupload" type="file" multiple />
                                                <i class="mdi mdi-upload d-block font-size-16"></i> Upload
                                            </div>
                                            <img src="{{ URL::asset('uploads/Model-Color') }}/{{$item->Image3}}" width="100" height="100">
                                        </button>
                                    </div>
                                </div>

                                <div class="row">        
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary w-md">Update</button>
                                    </div>
                                </div>
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-1"></div> -->
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

