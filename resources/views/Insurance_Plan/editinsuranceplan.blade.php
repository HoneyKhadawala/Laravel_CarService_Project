@extends('MasterPage.base')

@section("pagetitle")
	Edit Plan Page
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
                        <h4 class="mb-0 font-size-18">Edit Insurance Plan</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="/InsuranceCompanyPlan/view">View All Insurance Plan</a></li>
                                <li class="breadcrumb-item active">Edit Insurance Plan</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Edit Insurance Plan</h4>

                            @if(session("status"))
                               
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-check-all mr-2"></i>
                                {{ session("status") }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            @endif

                            @foreach($inquredata as $item)
                            <form action="/InsuranceCompanyPlan/update" method="post" id="fillform">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <input type="hidden" name="id" value="{{$item->InsurancePlan_Id}}">
                                <input type="hidden" name="oldimg" value="{{$item->InsurancePlan_pdf_file}}">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="txtinsurancecmpname">Company Name</label>
                                            <input type="text" name="txtinsurancecmpname" class="form-control" id="txtinsurancecmpname" value="{{$item->InsurancePlan_Name}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="txtinsurancecmpdesc">Company Description</label>
                                            <textarea class="form-control" id="txtinsurancecmpdesc" name="txtinsurancecmpdesc">{{$item->InsurancePlan_desc}}</textarea>
                                        </div>  
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtinsuranceplanprice">Price</label><br/>
                                            <input type="text" id="txtinsuranceplanprice" class="form-control" name="txtinsuranceplanprice" value="{{$item->InsurancePlan_price}}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtinsuranceplanduration">Plan Duration</label>
                                            <input type="text" class="form-control" id="txtinsuranceplanduration" name="txtinsuranceplanduration" value="{{$item->InsurancePlan_Duration}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtinsuranceplanpdf">PDF File</label>
                                            <input type="file" class="form-control" id="txtinsuranceplanpdf" name="txtinsuranceplanpdf" value="{{$item->InsurancePlan_pdf_file}}">
                                            <img src="{{ URL::asset('uploads/InsurancePlan') }}\{{$item->InsurancePlan_pdf_file}} " width="100" height="100">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtinsuranceplanactive">Is Active</label><br/>
                                            &nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="txtinsuranceplanactive" id="txtinsuranceplanactive" class="ISActive" value="yes" @if($item->InsurancePlan_Isactive == "yes") checked @endif>
                                            <label>Yes</label><br/>
                                            &nbsp;&nbsp;&nbsp;
                                             <input type="radio" name="txtinsuranceplanactive" id="txtinsuranceplanactive" class="ISActive" value="no" @if($item->InsurancePlan_Isactive == "no") checked @endif>
                                            <label>No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                            
                                    <div class="col-sm-9 col-12 text-center">
                                        <button type="submit" class="btn btn-primary w-md">Update</button>
                                    </div>
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