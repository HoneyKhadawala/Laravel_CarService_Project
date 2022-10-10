

<?php $__env->startSection("pagetitle"); ?>
	Add Model Color Page
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
                        <h4 class="mb-0 font-size-18">Add New Model Color</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="/ModelColor/view">View All Model Color</a></li>
                                <li class="breadcrumb-item active">Add new Model Color</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <!-- <div class="col-lg-1"></div> -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Form of Model Color</h4>
                            <?php if(session("status")): ?>
                               
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-check-all mr-2"></i>
                                <?php echo e(session("status")); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <?php endif; ?>
                            <form id="form1" enctype="multipart/form-data" method="post" action="/ModelColor/insert">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtselectmodelname">Model Name</label>
                                            <select id="txtselectmodelname" name="txtselectmodelname" class="btn btn-secondary dropdown-toggle col-12" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <?php $__currentLoopData = $insertmodeldata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($row['Model_Id']); ?>"><?php echo e($row['Model_name']); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtmodelcolor">Color</label>
                                            <input type="text" class="form-control" id="txtmodelcolor" name="txtmodelcolor">
                                        </div>
                                    </div>
                                </div>                                
                            
                            <div class="row mb-4">
                                <div class="col-4">
                                    <label for="imgfrontviewupload" class="col-form-label">Front View</label><br/>
                                    <button type="button" class="btn btn-light waves-effect waves-light w-sm">
                                        <div class="fallback">
                                            <input name="imgfrontviewupload" id="imgfrontviewupload" type="file" multiple />
                                            <i class="mdi mdi-upload d-block font-size-16"></i> Upload
                                        </div>
                                    </button>
                                
                                </div>                                            
                                <div class="col-4">
                                    <label for="imgsideviewupload" class="col-form-label">Side View</label><br/>
                                    <button type="button" class="btn btn-light waves-effect waves-light w-sm">
                                        <div class="fallback">
                                            <input name="imgsideviewupload" id="imgsideviewupload" type="file" multiple />
                                            <i class="mdi mdi-upload d-block font-size-16"></i> Upload
                                        </div>
                                    </button>
                                
                                </div>
                                
                                <div class="col-4">
                                    <label for="imgbackviewupload" class="col-form-label">Back View</label><br/>
                                    <button type="button" class="btn btn-light waves-effect waves-light w-sm">
                                        <div class="fallback">
                                            <input name="imgbackviewupload" id="imgbackviewupload" type="file" multiple />
                                            <i class="mdi mdi-upload d-block font-size-16"></i> Upload
                                        </div>
                                    </button>
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
                <!-- <div class="col-lg-1"></div> -->
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
                    txtselectmodelname:
                    {
                        required:true
                    },
                    txtmodelcolor:
                    {
                        required:true
                    },
                    imgfrontviewupload:
                    {
                        required:true
                    },
                    imgsideviewupload:
                    {
                        required:true
                    },
                    imgbackviewupload:
                    {
                        required:true
                    }
                },
                messages:
                {
                    txtselectmodelname:
                    {
                        required:"Please Select Model"
                    },
                    txtmodelcolor:
                    {
                        required:"Enter Model Color"
                    },                   
                    imgfrontviewupload:
                    {
                        required:"Upload Front View Image"
                    },
                    imgsideviewupload:
                    {
                        required: "Upload Side View Image"
                    },
                    imgbackviewupload:
                    {
                        required:"Upload Back View Image"
                    }
                }
            });
        </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('MasterPage.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectWork\CarProject\resources\views/Model-Color/addmodelcolor.blade.php ENDPATH**/ ?>