

<?php $__env->startSection("pagetitle"); ?>
	Add Sub Admin Page
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
                    <h4 class="mb-0 font-size-18">Add New Sub Admin's</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="\SubAdmin\view">View All Sub Admin</a></li>
                            <li class="breadcrumb-item active">Add new Admin</li>
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
                        <h4 class="card-title mb-4">Form of Admin</h4>
                        <?php if(session("status")): ?>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="mdi mdi-check-all mr-2"></i>
                            <?php echo e(session("status")); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>

                        <?php endif; ?>

                        <form id="fill-form" enctype="multipart/form-data" action="/Admin/insert" method="post">
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="txtusername">User name</label>
                                        <input type="text" class="form-control" name="txtusername" id="txtusername">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="txtpassword">Password</label>
                                        <input type="Password" class="form-control" id="txtpassword" name="txtpassword">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="txtadminname">Name</label>
                                        <input type="text" class="form-control" id="txtadminname" name="txtadminname">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="txtnum">Contact No.</label>
                                        <input type="text" class="form-control" id="txtnum" name="txtnum">
                                    </div>
                                </div>
                            </div>

                    

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="txtmail">Email</label>
                                        <input type="email" class="form-control" id="txtmail" name="txtmail">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="UserType">User Type</label><br/>
                                        &nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="UserType" class="UserType" value="Super" >
                                        <label>Super</label><br/>
                                        &nbsp;&nbsp;&nbsp;
                                         <input type="radio" name="UserType" class="UserType" value="SubSuper"checked>
                                        <label>Sub Admin</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="UserBlock">Is Block</label><br/>
                                        &nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="UserBlock" class="UserBlock" value="yes">
                                        <label>Yes</label><br/>
                                        &nbsp;&nbsp;&nbsp;
                                         <input type="radio" name="UserBlock" class="UserBlock" value="no"checked>
                                        <label>No</label>
                                    </div>
                                </div>

                            </div>
                        

                        <div class="row mb-4">
                            <label class="col-form-label col-lg-2" id="uploadfile">Attached Files</label>
                            <button type="button" class="btn btn-light waves-effect waves-light w-sm"><div class="fallback">
                                        <input name="uploadfile" id="uploadfile" type="file" multiple />
                                         <i class="mdi mdi-upload d-block font-size-16"></i> Upload
                                    </div>
                                           
                                        </button>
                            <!-- <div class="col-lg-10">
                                <form method="post" class="dropzone">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
    
                                    <div class="dz-message needsclick">
                                        <div class="mb-3">
                                            <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                        </div>
                                        <h4>Click to upload Profile Pic.</h4>
                                    </div>
                                </form>
                            </div> -->
                        </div>
                                
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Submit</button>
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
            $("#fill-form").validate({
                rules:
                {
                    txtusername:
                    {
                        required:true
                    },
                    txtpassword:
                    {
                        required:true,
                        minlength:8,
                        number:true
                    },
                    txtadminname:
                    {
                        required:true,
                        lettersonly:true
                    },
                    txtnum:
                    {
                        required:true,
                        number:true,
                        minlength:10,
                        maxlength:10
                    },
                    txtmail:
                    {
                        required:true
                    },
                    uploadfile:
                    {
                        required:true
                    }
                },
                messages:
                {
                    txtusername:
                    {
                        required:"Please Enter Name"
                    },
                    txtpassword:
                    {
                        required:"Enter Password",
                        minlength:"Minmum lenght of Password is 8 charater",
                        number:"Number is nessary"
                    },
                    txtadminname:
                    {
                        required:"Please Enter Owner Name",
                        lettersonly:"Only alphabates allowed"
                    },
                    txtnum:
                    {
                        required:"Please Enter Contact Number",
                        number:"Only Digits Allowed",
                        minlength:"Not A valid Contact Number",
                        maxlength:"Not A valid Contact Number"
                    },
                    txtmail:
                    {
                        required:"Please Enter Your E-Mail"
                    },
                    uploadfile:
                    {
                        required:"Please upload Profile Picture"
                    }
                }
            });
        </script>


<?php $__env->stopSection(); ?>	
<?php echo $__env->make('MasterPage.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectWork\CarProject\resources\views/Sub-Admin/addsubadmin.blade.php ENDPATH**/ ?>