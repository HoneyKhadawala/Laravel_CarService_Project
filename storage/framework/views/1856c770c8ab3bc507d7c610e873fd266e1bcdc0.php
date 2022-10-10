

<?php $__env->startSection("pagetitle"); ?>
    Buy Car Page
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
                    <h1 class="text-white">Buy Car</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="\index">Home</a></li>
                    <li>Buy Car</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content">
            <!-- Dent Paint packages -->
            <div class="section-full bg-white content-inner">
                <div class="container">
					<div class="section-head text-center text-black">
                        <h2 class="text-uppercase">Buy New Car</h2>
                        <span class="title-small">Best Price</span>
                    </div>
					<div class="row">
						<?php $__currentLoopData = $cardata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-lg-3 col-md-4 col-sm-6 m-b30">
							<div class="paint-service">
								
								<img src="<?php echo e(URL::asset('uploads/Model')); ?>/<?php echo e($row->Model_image); ?>" width="600" height="500" alt="car img">
								<div class="services-content">
									<span><b class="text-uppercase m-a0">Car : </b><?php echo e($row->Model_name); ?></span><br/>
									<span><b class="text-uppercase m-a0" value="<?php echo e($row->Company_Id); ?>">Company : </b><?php echo e($row->Company_name); ?></span><br/>
									<button class="site-button outline red col-12 mt-2" type="button" onclick="window.location='/DetailBuyCar/<?php echo e($row->Model_Id); ?>'">Check</button>
								</div>
								
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>						
					</div>
				</div>
            </div>
            <!-- Pricing Table END -->
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
	
<?php $__env->stopSection(); ?>

<?php $__env->startSection("js-section"); ?>

<!-- JavaScript  files ========================================= -->
<script src="<?php echo e(URL::asset('UserSide/assets/js/combining.js')); ?>"></script><!-- COMBINING JS  -->
<?php $__env->stopSection(); ?>

<!-- //home,insurance company, about, contact us, my account--change password--my profile--logout,
//shop,testimonials, buy car -->
<?php echo $__env->make('Front-Side.Master.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectWork\CarProject\resources\views/Front-Side/BuyCar/viewbuycar.blade.php ENDPATH**/ ?>