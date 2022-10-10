

<?php $__env->startSection("pagetitle"); ?>
	Add Package Page
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
                        <h4 class="mb-0 font-size-18">Add New Package</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="\Package\view">View Package</a>
                                </li>
                                <li class="breadcrumb-item active">Add new Package</li>
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
                            <h4 class="card-title mb-4">Form of Package</h4>
                            <?php if(session("status")): ?>
                               
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-check-all mr-2"></i>
                                <?php echo e(session("status")); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <?php endif; ?>
                            <form id="form1" enctype="multipart/form-data" method="post" action="/Package/insert">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtpackagename">Package name</label>
                                            <input type="text" class="form-control" id="txtpackagename" name="txtpackagename">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtpackagedays">Package Days</label>
                                            <input type="text" class="form-control" id="txtpackagedays" name="txtpackagedays">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="txtpackagedesc">Package Description</label>
                                            <textarea id="txtpackagedesc" class="form-control" name="txtpackagedesc">&nbsp;</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <label for="txtpackageimg" class="col-form-label">Package_img</label><br/>
                                        <input name="txtpackageimg" class="form-control" id="txtpackageimg" type="file" multiple />
                                    </div>      
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="packageissactive">Is Active</label><br/>
                                            &nbsp;&nbsp;&nbsp;
                                            <input type="radio" id="packageissactive" name="packageissactive" value="yes">
                                            <label>Yes</label><br/>
                                            &nbsp;&nbsp;&nbsp;
                                             <input type="radio" id="packageissactive" name="packageissactive" value="no"checked>
                                            <label>No</label>
                                        </div>
                                    </div>
                                </div>
                            <div class="row">        
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </div>
                            </form>
                        </div>
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
        <script src="<?php echo e(URL::asset('assets/js/jquery.validate.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/js/additional-methods.min.js')); ?>"></script>
        <script>
            $("#form1").validate({
                rules:
                {
                    txtpackagename:
                    {
                        required:true
                    },
                    txtpackagedays:
                    {
                        required:true                        
                    },
                    txtpackagedesc:
                    {
                        required:true                    
                    },
                    txtpackageimg:
                    {
                        required:true
                    },
                    packageissactive:
                    {
                        required:true
                    }
                },
                messages:
                {
                    txtpackagename:
                    {
                        required:"Please Enter Package Name"
                    },
                    txtpackagedays:
                    {
                        required:"Please Enter Days"                        
                    },
                    txtpackagedesc:
                    {
                        required:"Please Enter Description"                        
                    },
                    txtpackageimg:
                    {
                        required:"Please Upload Image"
                    },
                    packageissactive:
                    {
                        required:"Select Package is active or not"
                    }
                }
            });
        </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('MasterPage.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectWork\CarProject\resources\views/Package/addpackage.blade.php ENDPATH**/ ?>