

<?php $__env->startSection("pagetitle"); ?>
	Add Approve Shop Page
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
                                    <h4 class="mb-0 font-size-18">Add New Approve Shop</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="/Approve Shop/view">View All Approve Shop</a></li>
                                            <li class="breadcrumb-item active">Add new Approve Shop</li>
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
                                        <h4 class="card-title mb-4">Form of Shop</h4>

                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-firstusername-input">Shop name</label>
                                                        <input type="text" class="form-control" id="formrow-firstname-input">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-firstusername-input">Ower name</label>
                                                        <input type="text" class="form-control" id="formrow-firstname-input">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-firstusername-input">User name</label>
                                                        <input type="text" class="form-control" id="formrow-firstname-input">
                                                    </div>
                                                </div>
                                                 <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-firstpassword-input">Password</label>
                                                        <input type="Password" class="form-control" id="formrow-firstname-input">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-contact-input">Contact No.</label>
                                                        <input type="text" class="form-control" id="formrow-firstname-input">
                                                    </div>
                                                </div>
                                                 <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Email</label>
                                                        <input type="email" class="form-control" id="formrow-email-input">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-firstname-input">Address 1</label><br/>
                                                        <textarea style="width: 35vw;">&nbsp;</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-contact-input">Address 2</label><br/>
                                                        <textarea style="width: 35vw;">&nbsp;</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formrow-firstusername-input">City_#</label>
                                                        <input type="text" class="form-control" id="formrow-firstname-input">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formrow-firstusername-input">Landmark</label>
                                                        <input type="text" class="form-control" id="formrow-firstname-input">
                                                    </div>
                                                </div>
                                                 <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formrow-firstpassword-input">Pincode</label>
                                                        <input type="Password" class="form-control" id="formrow-firstname-input">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formrow-firstusername-input">Registration Date</label>
                                                        <input type="text" class="form-control" id="formrow-firstname-input">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formrow-firstusername-input">Lattitude</label>
                                                        <input type="text" class="form-control" id="formrow-firstname-input">
                                                    </div>
                                                </div>
                                                 <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formrow-firstpassword-input">Longtitude</label>
                                                        <input type="Password" class="form-control" id="formrow-firstname-input">
                                                    </div>
                                                </div>
                                            </div>

                                    

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="formrow-input">About Shop</label>
                                                        <textarea style="width: 72vw;">&nbsp;</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-type-input">Status</label><br/>
                                                        &nbsp;&nbsp;&nbsp;
                                                        <input type="radio" name="status" value="active" checked>
                                                        <label>Active</label><br/>
                                                        &nbsp;&nbsp;&nbsp;
                                                        <input type="radio" name="status" value="deactive">
                                                        <label>Deactive</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-type-input">Is Block</label><br/>
                                                        &nbsp;&nbsp;&nbsp;
                                                        <input type="radio" name="UserBlock" value="yes">
                                                        <label>Yes</label><br/>
                                                        &nbsp;&nbsp;&nbsp;
                                                         <input type="radio" name="UserBlock" value="no"checked>
                                                        <label>No</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>

                                        <div class="row mb-4">
                                            <div class="col-4">
                                                <label class="col-form-label">Shop_Proof</label><br/>
                                                <button type="button" class="btn btn-light waves-effect waves-light w-sm">
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple />
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
                                            </div>-->
                                            </div>                                            
                                            <div class="col-4">
                                                <label class="col-form-label">Logo</label><br/>
                                                <button type="button" class="btn btn-light waves-effect waves-light w-sm">
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple />
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
                                            </div>-->
                                            </div>
                                            
                                            <div class="col-4">
                                                <label class="col-form-label">Photo</label><br/>
                                                <button type="button" class="btn btn-light waves-effect waves-light w-sm">
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple />
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
                                            </div>-->
                                            </div>
                                        
                                        </div>


                                        <div class="row">        
                                            <div class="col-12 text-center">
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        </div>
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

<?php $__env->stopSection(); ?>


<?php echo $__env->make('MasterPage.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectWork\CarProject\resources\views/Approve-Shop/addapproveshop.blade.php ENDPATH**/ ?>