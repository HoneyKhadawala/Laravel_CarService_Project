

<?php $__env->startSection("pagetitle"); ?>
	Admin Page
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
                                    <h4 class="mb-0 font-size-18">Manage Sub Admin's</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item">
                                                <a href="\Dashboard" class="waves-effect">
                                                    <i class="bx bx-home-circle"></i>
                                                </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Sub Admin</a></li>
                                            <li class="breadcrumb-item active">View All Sub Admin</li>
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
                                        <h4 class="card-title">All Sub Admin List</h4>
                                        <div style="text-align: right;">
                                            <button type="button" class="btn btn-info waves-effect waves-light" onclick="window.location='/SubAdmin/add';" style="margin-top: -3.5vw;">Add Sub Admin</button>
                                        </div>  
                                        <?php if(session("status")): ?>
                                           
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <i class="mdi mdi-check-all mr-2"></i>
                                                <?php echo e(session("status")); ?>

                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                        
                                        <?php endif; ?>                
                                        <div class="table-responsive">
                                            <table class="table mb-0">
        
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Profile Pic</th>
                                                        <th>Name</th>
                                                        <th>User Name</th>
                                                        <th>Password</th>
                                                        <th>Contact No.</th>
                                                        <th>Email ID</th>
                                                        <th>User Type</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $admindata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <th scope="row"><?php echo e($loop->index+1); ?></th>
                                                        <td><img src="<?php echo e(URL::asset('uploads/Sub-Admin')); ?>\<?php echo e($row->Profile_pic); ?> " width="100" height="100"></td>
                                                        <td><?php echo e($row->Name); ?></td>
                                                        <td><?php echo e($row->User_name); ?></td>
                                                        <td><?php echo e($row->Password); ?></td>
                                                        <td><?php echo e($row->Contact_No); ?></td>
                                                        <td><?php echo e($row->Email_id); ?></td>
                                                        <td><?php echo e($row->User_Type); ?></td>
                                                        <td> 
                                                            <button type="button" class="btn btn-success waves-effect waves-light" style="margin: 2px;" onclick="window.location='/SubAdmin/edit/<?php echo e($row->Admin_Id); ?>';">
                                                                <i class="mdi mdi-pencil d-block font-size-16"></i><!-- Edit -->
                                                            </button>
                                                            <button data-id="<?php echo e($row->Admin_Id); ?>"data-toggle="modal" type="button" data-target="#myModal" class="btn btn-danger waves-effect waves-light open-dialog" style="margin: 2px;">
                                                                <i class="mdi mdi-trash-can d-block font-size-16"></i><!-- Delete -->
                                                            </button>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" style="margin: 2px;">
                                                                <i class="bx bx-block font-size-16 align-middle"></i><!-- Block -->
                                                            </button>  
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>

                <!-- sample modal content -->
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Warning!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Are you sure?</h5>
               
                </div>
                <div class="modal-footer">
                    <form action="/Sub-Admin/delete" method="post">
                         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <input type="hidden" id="deleteid" name="deleteid">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Yes</button>
                </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection("js-section"); ?>
 <!-- JAVASCRIPT -->
        <script src="<?php echo e(URL::asset('assets/libs/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/metismenu/metisMenu.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/simplebar/simplebar.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/node-waves/waves.min.js')); ?>"></script>

        <script src="<?php echo e(URL::asset('assets/js/app.js')); ?>"></script>

        <script>
            $(".open-dialog").click(function(){
                var id = $(this).attr("data-id");
                $("#deleteid").val(id);
            });
        </script>

<?php $__env->stopSection(); ?>	
<?php echo $__env->make('MasterPage.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectWork\CarProject\resources\views/Sub-Admin/subadmin.blade.php ENDPATH**/ ?>