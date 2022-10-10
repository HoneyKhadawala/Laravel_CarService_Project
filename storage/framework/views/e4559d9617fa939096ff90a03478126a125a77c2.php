

<?php $__env->startSection("pagetitle"); ?>
	Add Insurance  Plan Page
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
                        <h4 class="mb-0 font-size-18">Add Insurance Plan</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="/InsuranceCompanyPlan/view">View All Insurance Plan</a></li>
                                <li class="breadcrumb-item active">Add Insurance Plan</li>
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
                            <h4 class="card-title mb-4">Add New Insurance Plan</h4>

                            <?php if(session("status")): ?>
                               
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-check-all mr-2"></i>
                                <?php echo e(session("status")); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <?php endif; ?>


                            <form action="/InsuranceCompanyPlan/insert" method="post" id="fillform">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="txtinsurancecmpname">Company Name</label>
                                            <input type="text" name="txtinsurancecmpname" class="form-control" id="txtinsurancecmpname">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="txtinsurancecmpdesc">Company Description</label>
                                            <textarea class="form-control" id="txtinsurancecmpdesc" name="txtinsurancecmpdesc">&nbsp;</textarea>
                                        </div>  
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtinsuranceplanprice">Price</label><br/>
                                            <input type="text" id="txtinsuranceplanprice" class="form-control" name="txtinsuranceplanprice">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtinsuranceplanduration">Plan Duration</label>
                                            <input type="text" class="form-control" id="txtinsuranceplanduration" name="txtinsuranceplanduration">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtinsuranceplanpdf">PDF File</label>
                                            <input type="file" class="form-control" id="txtinsuranceplanpdf" name="txtinsuranceplanpdf">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtinsuranceplanactive">Is Active</label><br/>
                                            &nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="txtinsuranceplanactive" id="txtinsuranceplanactive" class="ISActive" value="yes" >
                                            <label>Yes</label><br/>
                                            &nbsp;&nbsp;&nbsp;
                                             <input type="radio" name="txtinsuranceplanactive" id="txtinsuranceplanactive" class="ISActive" value="no"checked>
                                            <label>No</label>
                                        </div>
                                    </div>
                                </div>

                                
                                

                                <div class="form-group row justify-content-center">
                            
                                    <div class="col-sm-9 col-12 text-center">
                                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                                    </div>
                                </div>
                            </form>
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
        <script src="<?php echo e(URL::asset('assets/js/jquery.validate.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/js/additional-methods.min.js')); ?>"></script>
        <script>
            $("#fillform").validate({
                rules:
                {
                    txtinsurancecmpname:
                    {
                        required:true
                    },
                    txtinsurancecmpdesc:
                    {
                        required:true                        
                    },
                    txtinsuranceplanprice:
                    {
                        required:true,
                        number:true                    
                    },
                    txtinsuranceplanduration:
                    {
                        required:true
                    },
                    txtinsuranceplanpdf:
                    {
                        required:true
                    }
                },
                messages:
                {
                    txtinsurancecmpname:
                    {
                        required:"Please Enter Insurance Company Name"
                    },
                    txtinsurancecmpdesc:
                    {
                        required:"Please Enter Company Description"                        
                    },
                    txtinsuranceplanprice:
                    {
                        required:"Please Enter Insurance Plan Price",
                        number:"Only Integer"                        
                    },
                    txtinsuranceplanduration:
                    {
                        required:"Please Enter Duration of Plan"
                    },
                    txtinsuranceplanpdf:
                    {
                        required:"Please Upload the PDF"
                    }
                }
            });
        </script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('MasterPage.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectWork\CarProject\resources\views/Insurance_Plan/addinsuranceplan.blade.php ENDPATH**/ ?>