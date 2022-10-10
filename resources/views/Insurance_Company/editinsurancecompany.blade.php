@extends('MasterPage.base')

@section("pagetitle")
	Insurance Company Page
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
                        <h4 class="mb-0 font-size-18">Edit Company</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="\InsuranceCompany/view">View All Company</a></li>
                                <li class="breadcrumb-item active">Edit Company</li>
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
                            <h4 class="card-title mb-4">Edit Company</h4>

                            @if(session("status"))
                               
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-check-all mr-2"></i>
                                {{ session("status") }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            @endif

                           @foreach($editinsurancecmp as $item)
                            <form action="/InsuranceCompany/update" method="post" id="fillform">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <input type="hidden" name="id" value="{{$item->InsuranceCmp_Id}}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="txtinsurancecmpname">Company Name</label>
                                            <input type="text" class="form-control" id="txtinsurancecmpname" name="txtinsurancecmpname" value="{{$item->InsuranceCmp_Name}}">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtinsurancecmpno">Contact No.</label>
                                            <input type="text" class="form-control" id="txtinsurancecmpno" name="txtinsurancecmpno" value="{{$item->Contact_No}}">
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtinsurancecmpmail">Email</label>
                                            <input type="email" class="form-control" id="txtinsurancecmpmail" name="txtinsurancecmpmail" value="{{$item->Email_id}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="txtinsurancecmpdesc">Descrpition</label>
                                            <textarea class="form-control" name="txtinsurancecmpdesc" class="txtinsurancecmpdesc">{{$item->Description}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtinsurancecmpadd">Office Address 1</label><br/>
                                            <textarea id="txtinsurancecmpadd" class="form-control" name="txtinsurancecmpadd">{{$item->Off_Address}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtinsurancecmpadd2">Office Address 2</label><br/>
                                            <textarea id="txtinsurancecmpadd2" class="form-control" name="txtinsurancecmpadd2">{{$item->Off_Address2}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="txtinsurancecmpcity">City_Name</label>
                                            <select class="btn btn-secondary dropdown-toggle col-12" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="txtinsurancecmpcity" name="txtinsurancecmpcity">
                                              @foreach($citydata as $row)
                                               
                                               <option value="{{ $row->City_Id }}" @if($item->City_Id==$row->City_Id) selected @endif  > 
                                                    {{ $row->City_name}}
                                                </option>

                                                @endforeach
                                            </select>            
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="txtinsurancecmplandmark">Landmark</label>
                                            <input type="text" class="form-control" id="txtinsurancecmplandmark" name="txtinsurancecmplandmark" value="{{$item->Landmark}}">
                                        </div>
                                    </div>

                                     <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="txtinsurancecmppin">Pincode</label>
                                            <input type="text" class="form-control" id="txtinsurancecmppin" name="txtinsurancecmppin" value="{{$item->Pincode}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="txtinsurancecmpactive" class="col-form-label">Is Active</label><br/>
                                            &nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="txtinsurancecmpactive" class="txtinsurancecmpactive" value="yes"  @if( $item->Isactive == "yes" ) checked @endif>
                                            <label>Yes</label><br/>
                                            &nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="txtinsurancecmpactive" class="txtinsurancecmpactive" value="no" @if( $item->Isactive == "no" ) checked @endif>
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