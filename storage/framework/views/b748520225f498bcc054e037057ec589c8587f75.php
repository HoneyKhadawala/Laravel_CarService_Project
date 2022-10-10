

<?php $__env->startSection("pagetitle"); ?>
	Edit Plan Page
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

                            <?php if(session("status")): ?>
                               
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-check-all mr-2"></i>
                                <?php echo e(session("status")); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <?php endif; ?>

                            <?php $__currentLoopData = $inquredata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <form action="/InsuranceCompanyPlan/update" method="post" id="fillform">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <input type="hidden" name="id" value="<?php echo e($item->InsurancePlan_Id); ?>">
                                <input type="hidden" name="oldimg" value="<?php echo e($item->InsurancePlan_pdf_file); ?>">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="txtinsurancecmpname">Company Name</label>
                                            <input type="text" name="txtinsurancecmpname" class="form-control" id="txtinsurancecmpname" value="<?php echo e($item->InsurancePlan_Name); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="txtinsurancecmpdesc">Company Description</label>
                                            <textarea class="form-control" id="txtinsurancecmpdesc" name="txtinsurancecmpdesc"><?php echo e($item->InsurancePlan_desc); ?></textarea>
                                        </div>  
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtinsuranceplanprice">Price</label><br/>
                                            <input type="text" id="txtinsuranceplanprice" class="form-control" name="txtinsuranceplanprice" value="<?php echo e($item->InsurancePlan_price); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtinsuranceplanduration">Plan Duration</label>
                                            <input type="text" class="form-control" id="txtinsuranceplanduration" name="txtinsuranceplanduration" value="<?php echo e($item->InsurancePlan_Duration); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtinsuranceplanpdf">PDF File</label>
                                            <input type="file" class="form-control" id="txtinsuranceplanpdf" name="txtinsuranceplanpdf" value="<?php echo e($item->InsurancePlan_pdf_file); ?>">
                                            <img src="<?php echo e(URL::asset('uploads/InsurancePlan')); ?>\<?php echo e($item->InsurancePlan_pdf_file); ?> " width="100" height="100">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtinsuranceplanactive">Is Active</label><br/>
                                            &nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="txtinsuranceplanactive" id="txtinsuranceplanactive" class="ISActive" value="yes" <?php if($item->InsurancePlan_Isactive == "yes"): ?> checked <?php endif; ?>>
                                            <label>Yes</label><br/>
                                            &nbsp;&nbsp;&nbsp;
                                             <input type="radio" name="txtinsuranceplanactive" id="txtinsuranceplanactive" class="ISActive" value="no" <?php if($item->InsurancePlan_Isactive == "no"): ?> checked <?php endif; ?>>
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
<?php echo $__env->make('MasterPage.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectWork\CarProject\resources\views/Insurance_Plan/editinsuranceplan.blade.php ENDPATH**/ ?>