

<?php $__env->startSection("pagetitle"); ?>
	Log Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css-section'); ?>
	<!-- Bootstrap Css -->
    <link href="<?php echo e(URL::asset('assets/css/bootstrap.min.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo e(URL::asset('assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo e(URL::asset('assets/css/app.min.css')); ?>" id="app-style" rel="stylesheet" type="text/css" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo e(URL::asset('assets/images/favicon.ico')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection("main-section"); ?>
	<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Manage Logs</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item">
                                            <a href="\Dashboard" class="waves-effect">
                                                <i class="bx bx-home-circle"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Order</a></li>
                                        <li class="breadcrumb-item active">View All Log</li>
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
                                    <h4 class="card-title">All Log List</h4>

                                    <div class="table-responsive">
                                        <table class="table mb-0">
    
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Order_#</th>
                                                    <th>Status</th>
                                                    <th>Log_Text</th>
                                                    <th>Log_Date-time</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>2</td>
                                                    <td>Running</td>
                                                    <td>des...</td>
                                                    <td>23/2/2021 &nbsp; 12:00pm</td>
                                                    <td> 
                                                        <button type="button" class="btn btn-success waves-effect waves-light" style="margin: 2px;">
                                                            <i class="mdi mdi-pencil d-block font-size-16"></i><!-- Edit -->
                                                        </button>
                                                        <button type="button" class="btn btn-danger waves-effect waves-light" style="margin: 2px;">
                                                            <i class="mdi mdi-trash-can d-block font-size-16"></i><!-- Delete -->
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>2</td>
                                                    <td>Running</td>
                                                    <td>des...</td>
                                                    <td>23/2/2021 &nbsp; 12:00pm</td>
                                                    <td> 
                                                        <button type="button" class="btn btn-success waves-effect waves-light" style="margin: 2px;">
                                                            <i class="mdi mdi-pencil d-block font-size-16"></i><!-- Edit -->
                                                        </button>
                                                        <button type="button" class="btn btn-danger waves-effect waves-light" style="margin: 2px;">
                                                            <i class="mdi mdi-trash-can d-block font-size-16"></i><!-- Delete -->
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>2</td>
                                                    <td>Running</td>
                                                    <td>des...</td>
                                                    <td>23/2/2021 &nbsp; 12:00pm</td>
                                                    <td> 
                                                        <button type="button" class="btn btn-success waves-effect waves-light" style="margin: 2px;">
                                                            <i class="mdi mdi-pencil d-block font-size-16"></i><!-- Edit -->
                                                        </button>
                                                        <button type="button" class="btn btn-danger waves-effect waves-light" style="margin: 2px;">
                                                            <i class="mdi mdi-trash-can d-block font-size-16"></i><!-- Delete -->
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>2</td>
                                                    <td>Running</td>
                                                    <td>des...</td>
                                                    <td>23/2/2021 &nbsp; 12:00pm</td>
                                                    <td> 
                                                        <button type="button" class="btn btn-success waves-effect waves-light" style="margin: 2px;">
                                                            <i class="mdi mdi-pencil d-block font-size-16"></i><!-- Edit -->
                                                        </button>
                                                        <button type="button" class="btn btn-danger waves-effect waves-light" style="margin: 2px;">
                                                            <i class="mdi mdi-trash-can d-block font-size-16"></i><!-- Delete -->
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
    
                                </div>
                            <!-- end row -->
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("js-section"); ?>
 <!-- JAVASCRIPT -->
        <script src="<?php echo e(URL::asset('assets/libs/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/metismenu/metisMenu.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/simplebar/simplebar.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/node-waves/waves.min.js')); ?>"></script>

        <script src="<?php echo e(URL::asset('assets/js/app.js')); ?>"></script>

<?php $__env->stopSection(); ?>	
<?php echo $__env->make('MasterPage.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectWork\CarProject\resources\views/Log/viewlog.blade.php ENDPATH**/ ?>