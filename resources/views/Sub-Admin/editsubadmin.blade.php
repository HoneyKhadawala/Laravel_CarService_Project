@extends('MasterPage.base')

@section("pagetitle")
	Add Sub Admin Page
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
                    <h4 class="mb-0 font-size-18">Edit Sub Admin's</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="\SubAdmin\view">View All Sub Admin</a></li>
                            <li class="breadcrumb-item active">Add new Admin</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Form of Admin</h4>
                        @if(session("status"))

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="mdi mdi-check-all mr-2"></i>
                            {{ session("status") }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>

                        @endif

                        @foreach($admindata as $item)
                        <form id="fill-form" enctype="multipart/form-data" action="/SubAdmin/update" method="post">
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                            <input type="hidden" name="id" value="{{ $item->Admin_Id }}"> <!-- For calling object of data -->
                             <input type="hidden" name="oldimg" value="{{ $item->Profile_pic }}"> <!-- For calling object of current image from db -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="txtusername">User name</label>
                                        <input type="text" value="{{$item->User_name}}" class="form-control" name="txtusername" id="txtusername">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="txtpassword">Password</label>
                                        <input type="Password" value="{{$item->Password}}" class="form-control" id="txtpassword" name="txtpassword">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="txtadminname">Name</label>
                                        <input type="text" value="{{$item->Name}}" class="form-control" id="txtadminname" name="txtadminname">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="txtnum">Contact No.</label>
                                        <input type="text" value="{{$item->Contact_No}}" class="form-control" id="txtnum" name="txtnum">
                                    </div>
                                </div>
                            </div>

                    

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="txtmail">Email</label>
                                        <input type="email" value="{{$item->Email_id}}" class="form-control" id="txtmail" name="txtmail">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="UserType">User Type</label><br/>
                                        &nbsp;&nbsp;&nbsp;
                                        <input type="radio" @if($item->User_Type=="Super") checked @endif name="UserType" class="UserType" value="Super" >
                                        <label>Super</label><br/>
                                        &nbsp;&nbsp;&nbsp;
                                         <input type="radio" @if($item->User_Type=="SubSuper") checked @endif name="UserType" class="UserType" value="SubSuper">
                                        <label>Sub Admin</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="UserBlock">Is Block</label><br/>
                                        &nbsp;&nbsp;&nbsp;
                                        <input type="radio" @if($item->IsBlock=="yes") checked @endif name="UserBlock" class="UserBlock" value="yes">
                                        <label>Yes</label><br/>
                                        &nbsp;&nbsp;&nbsp;
                                         <input type="radio" @if($item->IsBlock=="no") checked @endif name="UserBlock" class="UserBlock" value="no">
                                        <label>No</label>
                                    </div>
                                </div>

                            </div>
                        

                            <div class="row mb-4">
                                <label class="col-form-label col-lg-2" id="uploadfile">Attached Files</label>
                                <button type="button" class="btn btn-light waves-effect waves-light w-sm">
                                    <div class="fallback">
                                        <input name="uploadfile" id="uploadfile" type="file" multiple />
                                         <i class="mdi mdi-upload d-block font-size-16"></i> Upload
                                    </div>
                                </button>
                                <img src="{{ URL::asset('uploads/Sub-Admin') }}\{{$item->Profile_pic}} " width="100" height="100">
                            </div>
                                    
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary w-md">Update</button>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
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