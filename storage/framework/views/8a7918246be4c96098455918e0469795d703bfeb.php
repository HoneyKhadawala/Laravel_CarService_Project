

<?php $__env->startSection("pagetitle"); ?>
    Detail About Car Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css-section'); ?>
		
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('UserSide/assets/css/combine.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('UserSide/assets/plugins/fontawesome/css/font-awesome.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('UserSide/assets/plugins/themify/themify-icons.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('UserSide/assets/css/style.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('UserSide/assets/css/templete.min.css')); ?>">
	<link class="skin"  rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('UserSide/assets/css/skin/skin-1.css')); ?>">
	
<?php $__env->stopSection(); ?>
    
<?php $__env->startSection("main-section"); ?>
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(<?php echo e(URL::asset('UserSide/assets/images/background/bg4.jpg')); ?>);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Shop Portfolio</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="/index">Home</a></li>
                    <li><a href="/BuyCar">Car</a></li>
                    <li>Detail Car</li>
                </ul>
            </div>
                    </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="section-full content-inner bg-white">
            <!-- Portfolio -->
            <div class="container">
                <div class="clearfix">
                    <div id="masonry" class="row dlab-blog-grid-2">
                        <div class="post card-container col-lg-6 col-md-6 col-sm-6">
                            <?php $__currentLoopData = $cardetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="blog-post blog-grid ">
                                    <div class="dlab-post-media dlab-img-effect zoom-slow">
                                        <img src="<?php echo e(URL::asset('uploads/Model')); ?>/<?php echo e($item->Model_image); ?>" alt="">
                                    </div>
                                    <div class="dlab-post-info text-justify">
                                        <div class="dlab-post-title ">
                                            <h3 class="post-title"><?php echo e($item->Model_name); ?></h3>
                                        </div>
                                        <div>
                                            <span><b value="<?php echo e($item->Company_Id); ?>">Company Name : </b><?php echo e($item->Company_name); ?></span>
                                        </div>
                                        <?php $__currentLoopData = $pricedata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div>
                                            <span><b value="<?php echo e($row->City_Id); ?>">City : </b> <?php echo e($row->City_name); ?> </span>
                                        </div>                                        
                                        <div>
                                            <span><b>OnRoad Price: </b> <?php echo e($row->Onroad_Price); ?></span>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                    
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Portfolio END -->
        </div>
        <!-- contact END -->
    </div>
    <!-- Content END-->
<?php $__env->stopSection(); ?>
    
<?php $__env->startSection("js-section"); ?>
<!-- JavaScript  files ========================================= -->
<script src="<?php echo e(URL::asset('UserSide/assets/js/combining.js')); ?>"></script><!-- COMBINING JS  -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Front-Side.Master.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectWork\CarProject\resources\views/Front-Side/BuyCar/Detailbuycar.blade.php ENDPATH**/ ?>