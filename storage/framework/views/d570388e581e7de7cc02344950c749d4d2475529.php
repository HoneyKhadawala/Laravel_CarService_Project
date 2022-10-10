

<?php $__env->startSection("pagetitle"); ?>
	Add Shop Package Page
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
                        <h4 class="mb-0 font-size-18">Add New Shop Package</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="/ShopPackage/view" class="waves-effect">
                                        View All Shop Package
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Add new Shop Package</li>
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
                            <h4 class="card-title mb-4">Form of Shop Package</h4>
                            <?php if(session("status")): ?>
                               
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-check-all mr-2"></i>
                                <?php echo e(session("status")); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <?php endif; ?>
                            <form id="form1" enctype="multipart/form-data" method="post" action="/ShopPackage/insert">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtshopid">Shop_#</label>
                                            <select class="btn btn-secondary dropdown-toggle col-12 form-control" type="button" id="txtshopid data-toggle="dropdown" name="txtshopid" aria-haspopup="true" aria-expanded="false">
                                                <?php $__currentLoopData = $shopdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($row->Shop_Id); ?>"><?php echo e($row->Shop_name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtpackageid">Package_#</label>
                                            <select class="btn btn-secondary dropdown-toggle col-12 form-control" type="button" id="txtpackageid" data-toggle="dropdown" name="txtpackageid" aria-haspopup="true" aria-expanded="false">
                                                <?php $__currentLoopData = $packagedata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($row->Package_Id); ?>"><?php echo e($row->Package_name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtstartdate">Start_Date</label>
                                            <input type="date" class="form-control" id="txtstartdate" name="txtstartdate">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="txtenddate">End_Date</label>
                                            <input type="date" class="form-control" id="txtenddate" name="txtenddate">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="paymode">Pay Mode</label><br/>
                                            &nbsp;&nbsp;&nbsp;
                                            <input type="radio" id="paymode" name="paymode" value="yes">
                                            <label>Cash</label><br/>
                                            &nbsp;&nbsp;&nbsp;
                                             <input type="radio" id="paymode" name="paymode" value="no"checked>
                                            <label>Online</label>
                                        </div>
                                    </div>      
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ispay">Is Pay</label><br/>
                                            &nbsp;&nbsp;&nbsp;
                                            <input type="radio" id="ispay" name="ispay" value="yes">
                                            <label>Yes</label><br/>
                                            &nbsp;&nbsp;&nbsp;
                                             <input type="radio" id="ispay" name="ispay" value="no"checked>
                                            <label>No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="txttranscationno">Transcation number</label>
                                            <input type="text" class="form-control" name="txttranscationno" id="txttranscationno" />
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
                    txtshopid:
                    {
                        required:true
                    },
                    txtpackageid:
                    {
                        required:true
                    },
                    txtstartdate:
                    {
                        required:true
                    },
                    txtenddate:
                    {
                        required:true
                    },
                    paymode:
                    {
                        required:true
                    },
                    ispay:
                    {
                        required:true
                    }
                    // txttranscationno:
                    // {
                    //     required:true,
                    //     number:true,
                    //     minlength:10,
                    //     maxlength:10
                    // }
                },
                messages:
                {
                    txtshopid:
                    {
                        required:"Please Select shop Name"
                    },
                    txtpackageid:
                    {
                        required:"Please Select Package Name"
                    },
                    txtstartdate:
                    {
                        required:"Please Select Starting date"
                    },
                    txtenddate:
                    {
                        required:"Please Select Expired date"
                    },
                    paymode:
                    {
                        required:"Select Payment Mode"
                    },
                    ispay:
                    {
                        required:"Select payed or not"
                    }
                    // txttranscationno:
                    // {
                    //     required:"Please Enter Transcation Number",
                    //     number:"Only Digits Allowed",
                    //     minlength:"Not A valid Transcation Number",
                    //     maxlength:"Not A valid Transcation Number",
                    // }                    
                }
            });
        </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('MasterPage.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectWork\CarProject\resources\views/Shop-Package/addshoppackage.blade.php ENDPATH**/ ?>