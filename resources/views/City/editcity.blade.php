@extends('MasterPage.base')

@section("pagetitle")
	Add City Page
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
                        <h4 class="mb-0 font-size-18">Add City</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="\City\view">View All City</a></li>
                                <li class="breadcrumb-item active">Add City</li>
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
                            <h4 class="card-title mb-4">Add New City</h4>

                            @if(session("status"))
                               
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-check-all mr-2"></i>
                                {{ session("status") }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            @endif


                            @foreach($citydata as $item)

                            <form action="/City/update" method="post" id="fillform">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <input type="hidden" name="id" value="{{ $item->City_Id }}">
                                <div class="form-group row mb-4">
                                     <label for="horizontal-select-input" class="col-sm-3 col-form-label">Select State</label>
                                     <div class="col-sm-9">
                                        <div class="dropdown">
                                            <select class="btn btn-secondary dropdown-toggle col-12" type="button" id="txtstate" data-toggle="dropdown" name="txtstate" aria-haspopup="true" aria-expanded="false">
                                              @foreach($statedata as $row)
                                               <option @if( $item->state_Id==$row->State_Id ) selected @endif value=" {{ $row->State_Id}} ">{{ $row->State_Name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="txtcityname" class="col-sm-3 col-form-label">City Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{ $item->City_name }}" name="txtcityname" class="form-control" id="txtcityname">
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
        <script src="{{URL::asset('assets/js/jquery.validate.min.js') }}"></script>
        <script src="{{URL::asset('assets/js/additional-methods.min.js') }}"></script>
        <script>
            $('#fillform').validate({
                rules:
                {
                    txtcityname:
                    {
                        required:true
                    }
                },
                messages:
                {
                   txtcityname:
                    {
                        required:"Enter city"
                    } 
                }

            });
        </script>


@endsection