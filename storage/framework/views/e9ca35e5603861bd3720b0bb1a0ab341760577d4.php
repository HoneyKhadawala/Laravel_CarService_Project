

<?php $__env->startSection("pagetitle"); ?>
	 Reset Password Page
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
                        <h4 class="mb-0 font-size-18"> Reset Password</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active"> Reset Password</li>
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
                            <h4 class="card-title mb-4"> Reset Password</h4>

                            <?php if(session("status")): ?>
                               
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-check-all mr-2"></i>
                                <?php echo e(session("status")); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <?php endif; ?>


                            <form class="form-horizontal" action="https://themesbrand.com/skote/layouts/index.html">
            
                                        <div class="form-group">
                                            <label for="usercurrentpass">Current Password</label>
                                            <input type="text" class="form-control" id="usercurrentpass" name="
                                            usercurrentpass" placeholder="Enter Current Password">
                                        </div>

                                        <div class="form-group">
                                            <label for="usernewpass">New Password</label>
                                            <input type="text" class="form-control" id="usernewpass" name="usernewpass" placeholder="Enter New Password">
                                        </div>

                                        <div class="form-group">
                                            <label for="userverifypass">Verify Password</label>
                                            <input type="text" class="form-control" id="userverifypass" name="userverifypass" placeholder="Enter Verify Password">
                                        </div>
                    
                                        <div class="form-group row mb-0">
                                            <div class="col-12 text-right">
                                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
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
        <script src="<?php echo e(URL::asset('assets/js/jquery.validate.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/js/additional-methods.min.js')); ?>"></script>
        <script>
            $('#fillform').validate({
                rules:
                {
                    usercurrentpass:
                    {
                        required:true
                    },
                    usernewpass:
                    {
                        required:true
                    },
                    userverifypass:
                    {
                        required:true
                    }
                },
                messages:
                {
                   usercurrentpass:
                    {
                        required:"Please Enter Current Password"
                    } 
                    usernewpass:
                    {
                        required:"Please Enter New Password"
                    },
                    userverifypass:
                    {
                        required:"Please Enter Verify Password"
                    }
                }

            });
        </script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('MasterPage.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectWork\CarProject\resources\views/Password/viewpassword1.blade.php ENDPATH**/ ?>