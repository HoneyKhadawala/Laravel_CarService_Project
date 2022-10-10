@extends('MasterPage.base')

@section("pagetitle")
	Edit Price Page
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
                        <h4 class="mb-0 font-size-18">Edit Price</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="\Prices\view">View All Price</a></li>
                                <li class="breadcrumb-item active">Edit Price</li>
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
                            <h4 class="card-title mb-4">Edit Price</h4>

                            @if(session("status"))
                               
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-check-all mr-2"></i>
                                {{ session("status") }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>

                            @endif

                            @foreach($editpricedata as $item)
                            <form action="/Prices/update" method="post" id="fillform">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <input type="hidden" name="id" value="{{ $item->Price_Id }}">
                                <div class="form-group row mb-4">
                                     <label for="txtcityselect" class="col-sm-3 col-form-label">Select City</label>
                                     <div class="col-sm-9">
                                        <div class="dropdown">
                                            <select class="btn btn-secondary dropdown-toggle col-12" type="button" id="txtcityselect" data-toggle="dropdown" name="txtcityselect" aria-haspopup="true" aria-expanded="false">
                                              @foreach($editcitydata as $row)
                                               <option value="{{ $row->City_Id}}" @if($item->City_Id == $row->City_Id) selected @endif>{{ $row->City_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                     <label for="txtmodelselect" class="col-sm-3 col-form-label">Select Model</label>
                                     <div class="col-sm-9">
                                        <div class="dropdown">
                                            <select class="btn btn-secondary dropdown-toggle col-12" type="button" id="txtmodelselect" data-toggle="dropdown" name="txtmodelselect" aria-haspopup="true" aria-expanded="false" >
                                              @foreach($editmodeldata as $row)
                                               <option value="{{ $row->Model_Id}}" @if($item->Model_Id == $row->Model_Id) selected @endif> {{ $row->Model_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="txtonroadprice" class="col-sm-3 col-form-label">OnRoad Price</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="txtonroadprice" class="form-control" id="txtonroadprice" value="{{ $item->Onroad_Price }}">
                                    </div>
                                </div>                                

                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-9">
                                        <div>
                                            <button type="submit" class="btn btn-primary w-md">Update</button>
                                        </div>
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
            
        </div> <!-- container-fluid -->
    </div>
@endsection


@section("js-section")
 <!-- JAVASCRIPT -->
        <script src="{{URL::asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{URL::asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{URL::asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{URL::asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{URL::asset('assets/libs/node-waves/waves.min.js') }}"></script>

        <script src="{{URL::asset('assets/js/app.js') }}"></script>

@endsection