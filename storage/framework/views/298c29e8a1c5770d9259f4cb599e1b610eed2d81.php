

<?php $__env->startSection("pagetitle"); ?>
	Edit Model Page
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
                                    <h4 class="mb-0 font-size-18">Edit Model</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="\Model\view">View All Model</a></li>
                                            <li class="breadcrumb-item active">Edit Model</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                             <div class="col-2"></div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Edit Model</h4>

                                         <?php if(session("status")): ?>

                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <i class="mdi mdi-check-all mr-2"></i>
                                                <?php echo e(session("status")); ?>

                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>

                                        <?php endif; ?>
                                        
                                        <?php $__currentLoopData = $editmodeldata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <form enctype="multipart/form-data" action="/Model/update" method="post" id="fill-form">
                                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                            <input type="hidden" name="id" value="<?php echo e($item->Model_Id); ?>">
                                            <input type="hidden" name="oldimg" value="<?php echo e($item->Model_image); ?>">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="txtcompany">Company Name</label>
                                                        <select class="btn btn-secondary dropdown-toggle col-12" type="button" id="txtcompany" data-toggle="dropdown" name="txtcompany" aria-haspopup="true" aria-expanded="false">
                                                            <?php $__currentLoopData = $editcompanydata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($row->Company_Id); ?>"><?php echo e($row->Company_name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="txtmodelname">Model name</label>
                                                        <input type="text" class="form-control" id="txtmodelname" name="txtmodelname" value="<?php echo e($item->Model_name); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="uploadfile">Model Image</label>
                                                        <input type="file" class="form-control" id="uploadfile" name="uploadfile">
                                                        <img src= "<?php echo e(URL::asset('uploads/Model')); ?>/<?php echo e($item->Model_image); ?>" width="100" height="100"></td>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary w-md">Update</button>
                                            </div>
                                        </form>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2"></div>
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
<?php echo $__env->make('MasterPage.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectWork\CarProject\resources\views/Model/editmodel.blade.php ENDPATH**/ ?>