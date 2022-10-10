

<?php $__env->startSection("pagetitle"); ?>
	Add Shop Service Page
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
                                    <h4 class="mb-0 font-size-18">Add New Shop Service</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="/ShopService/view">View All Shop Service</a></li>
                                            <li class="breadcrumb-item active">Add new Shop Service</li>
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
                                        <h4 class="card-title mb-4">Add Shop Service</h4>

                                        <?php if(session("status")): ?>

                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <i class="mdi mdi-check-all mr-2"></i>
                                                <?php echo e(session("status")); ?>

                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>

                                        <?php endif; ?>

                                        <form id="fill-form" action="/ShopService/insert" method="post">
                                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="txtshopname">Shop Name</label>
                                                        <select class="btn btn-secondary dropdown-toggle col-12" type="button" data-toggle="dropdown" name="txtshopname" aria-haspopup="true" aria-expanded="false" id="txtshopname">
                                                            <?php $__currentLoopData = $shopdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                               <option value="<?php echo e($row->Shop_Id); ?>"><?php echo e($row->Shop_name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="txtservicename">Service Name</label>
                                                        <select class="btn btn-secondary dropdown-toggle col-12" type="button" data-toggle="dropdown" name="txtservicename" aria-haspopup="true" aria-expanded="false" id="txtservicename">
                                                            <?php $__currentLoopData = $servicedata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($row->Service_Id); ?>"><?php echo e($row->Service_name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>                                            
                                            <div class="row">
                                                 <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="txtprice">Price</label>
                                                        <input type="text" class="form-control" id="txtprice" name="txtprice">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="txtcharge">Extra Charge</label>
                                                        <input type="text" class="form-control" id="txtcharge" name="txtcharge">
                                                    </div>
                                                </div> 
                                            </div>  
                                            <div class="row">   
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="txtinfo">Extra Info</label>
                                                        <input type="text" class="form-control" id="txtinfo" name="txtinfo">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        
                                                
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary w-md">Submit</button>
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
            $("#fill-form").validate({
                rules:
                {
                    txtprice:
                    {
                        required:true
                    },
                    txtcharge:
                    {
                        required:true,
                       
                    },
                    txtinfo:
                    {
                        required:true  
                        // lettersonly:true                      
                    }
                },
                messages:
                {
                    txtprice:
                    {
                        required:"Please Enter Price "
                    },
                    txtcharge:
                    {
                        required:"Please Enter Extra Charge"
                    },
                    txtinfo:
                    {
                        required:"Please Enter Information of Extra Charges"
                    }
                }
            });
        </script>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('MasterPage.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectWork\CarProject\resources\views/ShopService/addshopservice.blade.php ENDPATH**/ ?>