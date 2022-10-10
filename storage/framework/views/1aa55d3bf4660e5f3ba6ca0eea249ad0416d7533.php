

<?php $__env->startSection("pagetitle"); ?>
    Add Testimonial Page
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
                                    <h4 class="mb-0 font-size-18">Edit Testimonial</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="/Testimonial/view">View All Testimonial</a></li>
                                            <li class="breadcrumb-item active">Add Testimonial</li>
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
                                        <h4 class="card-title mb-4">Add New Testimonial</h4>
                                        
                                        <?php if(session("status")): ?>

                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <i class="mdi mdi-check-all mr-2"></i>
                                                <?php echo e(session("status")); ?>

                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>

                                        <?php endif; ?>

                                        <form action="/Testimonial/insert" enctype="multipart/form-data" method="post" id="form1">
                                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                            
                                            <div class="form-group row mb-4">
                                                <div class="col-6">
                                                    <label for="txttestimonialname" class=" col-form-label">Testimonial Name</label><br/>
                                                    <input type="text" class="form-control" name="txttestimonialname" id="txttestimonialname">
                                                </div>

                                                <div class="form-group mb-4 col-6">
                                                    <label for="txttestimonialnum" class=" col-form-label">Contact No.</label>
                                                    <input type="text" class="form-control" name="txttestimonialnum" id="txttestimonialnum">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <div class="col-6">
                                                    <label for="txttestimonialdesign" class="col-form-label">Designation</label>
                                                    <input type="text" class="form-control" name="txttestimonialdesign" id="txttestimonialdesign">
                                                </div>

                                                <div class="form-group col-6 mb-4">
                                                    <label for="texttestimonial" class=" col-form-label">Testimonial Text</label>
                                                    <input type="text" class="form-control" name="texttestimonial" id="texttestimonial">
                                                   
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <div class="col-6">
                                                    <label for="testimonialprofilepic" class=" col-form-label">Profile Pic</label>
                                                    <input type="file" class="form-control" name="testimonialprofilepic" id="testimonialprofilepic">
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="testimonialisdisplay" class=" col-form-label">Is Display</label><br/>
                                                        &nbsp;&nbsp;&nbsp;
                                                        <input type="radio" name="testimonialisdisplay" class="testimonialisdisplay" value="yes" checked>   
                                                        <label>Yes</label><br/>
                                                        &nbsp;&nbsp;&nbsp;
                                                         <input type="radio" name="testimonialisdisplay" class="testimonialisdisplay" value="no">
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
                             <div class="col-2"></div>
                        </div>
                        <!-- end row -->

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
            $('#form1').validate({
                rules:
                {
                    txttestimonialname:
                    {
                        required:true 
                    },  
                    txttestimonialnum:
                    {
                        required:true,
                        rangelenght: 10
                    },
                    txttestimonialdesign:
                    {
                        required:true
                    },
                    testimonialprofilepic:
                    {
                        required:true
                    },
                    texttestimonial:
                    {
                        required:true
                    },
                    testimonialisdisplay:
                    {
                        required:true
                    }
                },
                messages:
                {
                   txttestimonialname:
                    {
                        required:"Please Enter Testimonial Name"
                    },
                    txttestimonialnum:
                    {
                        required:"Enter your phone number",
                        rangelenght:"Invalid Number"
                        
                    }, 
                    txttestimonialdesign:
                    {
                        required:"Please Enter Designation"
                    },
                    testimonialprofilepic:
                    {
                        required:"Upload Profile Pic"
                    }, 
                    texttestimonial:
                    {
                        required:"Enter Text"
                    },
                    testimonialisdisplay:
                    {
                        required:"Please Select"
                    }
                }
            });
        </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('MasterPage.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectWork\CarProject\resources\views/Testimonials/addtestimonials.blade.php ENDPATH**/ ?>