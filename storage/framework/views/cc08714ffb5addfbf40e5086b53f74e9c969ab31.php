

<?php $__env->startSection("pagetitle"); ?>
    Shop List Page
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
                    <li><a href="/ServiceList">Service List</a></li>
                    <li>Service List Detail</li>
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
                            <?php $__currentLoopData = $servicedata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="blog-post blog-grid ">
                                    <div class="dlab-post-info text-justify">
                                        <div class="dlab-post-title ">
                                            <h3 class="post-title"><?php echo e($item->Service_name); ?></h3>
                                        </div>
                                        <div>
                                            <span><b>Description : </b><?php echo e($item->Service_description); ?></span>
                                        </div>                                        
                                        <div>
                                            <span><b>Service Type : </b> <?php echo e($item->Service_type); ?></span>
                                        </div>                                 
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
<?php echo $__env->make('Front-Side.Master.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectWork\CarProject\resources\views/Front-Side/Services/DetailServiceList.blade.php ENDPATH**/ ?>