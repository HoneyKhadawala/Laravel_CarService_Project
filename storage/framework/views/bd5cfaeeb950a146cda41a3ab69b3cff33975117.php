

<?php $__env->startSection("pagetitle"); ?>
    Change Password Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css-section'); ?> 
    
    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('UserSide/assets/css/combine.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('UserSide/assets/plugins/fontawesome/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('UserSide/assets/plugins/themify/themify-icons.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('UserSide/assets/css/style.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('UserSide/assets/css/templete.min.css')); ?>">
    <link class="skin"  rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('UserSide/assets/css/skin/skin-1.css')); ?>">

<?php $__env->stopSection(); ?>


<?php $__env->startSection("main-section"); ?>

	

    <div class="page-content">
        <!-- <div class="container-fluid"> -->

           
            <!-- inner page banner -->
	        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(UserSide/assets/images/background/bg4.jpg);">
	            <div class="container">
	                <div class="dlab-bnr-inr-entry">
	                    <h1 class="text-white"> Reset Password</h1>
	                </div>
	            </div>
	        </div>
        <!-- inner page banner END -->

        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="\index">Home</a></li>
                    <li>Change Password</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->

            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="card" style="margin-top: 4vw;">
                        <div class="card-body">
                            <!-- <h4 class="card-title mb-4"> Reset Password</h4> -->

                            <?php if(session("status")): ?>
                               
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-check-all mr-2"></i>
                                <?php echo e(session("status")); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <?php endif; ?>


                            <form class="form-horizontal" method="post" action="">
            
                                        <div class="form-group">
                                            <label for="usercurrentpass">Current Password</label>
                                            <input type="text" class="form-control" id="usercurrentpass" name="
                                            usercurrentpass" placeholder="Enter Current Password" required="">
                                        </div>

                                        <div class="form-group">
                                            <label for="usernewpass">New Password</label>
                                            <input type="text" class="form-control" id="usernewpass" name="usernewpass" placeholder="Enter New Password" required="">
                                        </div>

                                        <div class="form-group">
                                            <label for="userverifypass">Verify Password</label>
                                            <input type="text" class="form-control" id="userverifypass" name="userverifypass" placeholder="Enter Verify Password" required="">
                                        </div>
                    
                                        <div class="form-group row mb-0">
                                            <div class="col-12 text-right">
                                                <button class="btn btn-danger w-md waves-effect waves-light" type="submit">Reset</button>
                                            </div>
                                        </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
            <!-- end row -->
            
        <!-- </div> container-fluid -->
    </div>

<?php $__env->stopSection(); ?>



<?php $__env->startSection("js-section"); ?>

    <!-- JavaScript  files ========================================= -->
    <script src="<?php echo e(URL::asset('UserSide/assets/js/combining.js')); ?>"></script><!-- COMBINING JS  -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Front-Side.Master.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectWork\CarProject\resources\views/Front-Side/Change-Password/viewchangepassword.blade.php ENDPATH**/ ?>