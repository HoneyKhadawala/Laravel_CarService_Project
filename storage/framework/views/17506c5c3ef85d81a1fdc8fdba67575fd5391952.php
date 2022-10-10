

<?php $__env->startSection("pagetitle"); ?>
    Home Page
<?php $__env->stopSection(); ?>



<?php $__env->startSection('css-section'); ?>	

<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('UserSide/assets/css/combine.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('UserSide/assets/plugins/fontawesome/css/font-awesome.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('UserSide/assets/plugins/themify/themify-icons.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('UserSide/assets/css/style.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('UserSide/assets/css/templete.min.css')); ?>">
	<link class="skin"  rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('UserSide/assets/css/skin/skin-1.css')); ?>">
	<!-- Revolution Slider Css -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('UserSide/assets/plugins/revolution/css/revolution.min.css')); ?>">

	<style type="text/css">
		.dlab-img-effect
		{
			border-radius: 13vw;
			text-align: center;
			margin-bottom: 2vw;
			margin-left: 12vw;
		  	margin-right: auto;
		}
		.dlab-img-effect img
		{
			width: 260px;
			height: 260px; 
		}
		.dlab-img-effect .fa
		{
			font-size: 4vw;	
		}
	</style>

<?php $__env->stopSection(); ?>


<?php $__env->startSection("main-section"); ?>

	<!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(<?php echo e(URL::asset('UserSide/assets/images/background/bg4.jpg')); ?>);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">My Profile</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="\index">Home</a></li>
                    <li>MyProfile</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="row">
        	<div class="col-3"></div>
        	<div class="col-6">
		        <!-- contact area -->
		        <div class="section-full content-inner">
		            <!-- Product -->
		            <div class="container center_div">
		            	
		            	<?php $__currentLoopData = $userdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			                <form class="profile-form" method="post" action="/UserProfileUpdate">
			                	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
			                	<input type="hidden" name="id" value="<?php echo e($row->User_ID); ?>">
		                        <!-- <input type="hidden" name="oldimg" value="<?php echo e($row->User_Profile); ?>"> -->
		                        <?php if(session("status")): ?>
				                    <div class="alert alert-success alert-dismissible fade show" role="alert">
				                        <i class="mdi mdi-check-all mr-2"></i>
				                        <?php echo e(session("status")); ?>

				                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                            <span aria-hidden="true">×</span>
				                        </button>
				                    </div>
				                <?php endif; ?>
	                            <div class="row">
	                            	<div class="dlab-box">
		                                    <div class="dlab-media dlab-img-effect" for="txtuserprofile"> 
		                                    	<?php if(session("User_Profile")): ?>
		                                    		<img src="<?php echo e(URL::asset('UserUpload/MyProfile/')); ?>/<?php echo e(session('User_Profile')); ?>" alt="">
		                                    	<?php else: ?>
		                                    		<img src="<?php echo e(URL::asset('UserUpload/MyProfile/usericon.png')); ?>" alt="">
		                                    	<?php endif; ?>
		                                        <div class="dlab-info-has p-a20 bg-black">
		                                            <div class="dlab-info-has-text">Change Profile</div>
		                                            <a href="javascript:void(0);" class="fa fa-picture-o icon-bx-xs"></a> <!-- id="txtuserprofile" name="txtuserprofile" --> 
		                                        </div>
		                                    </div>
		                                </div>
		                        </div>
	                            <div class="row">
	                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
	                                	<label for="editusername">Name</label>
	                                    <input type="text" class="form-control" name="editusername" id="editusername" value="<?php echo e(session('User_name')); ?>">
	                                </div>
	                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
	                                	<label for="txtusercontactno">Contact No.</label>
	                                    <input type="text" class="form-control" name="txtusercontactno" id="txtusercontactno" value="<?php echo e(session('Contact_No')); ?>">
	                                </div>
	                            </div>
                                <div class="form-group">
                                	<label for="txtuseremail">Email</label>
                                    <input type="text" name="txtuseremail" id="txtuseremail" class="form-control" value="<?php echo e(session('Email_id')); ?>">
	                            </div>

		                        <div class="form-group">
                                    <label for="txtcity">City</label>
	                                <select id="txtcity" name="txtcity" class="btn col-12 form-control" >
	                                	<?php $__currentLoopData = $citydata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                                		<option  value="<?php echo e(session('City_Id')); ?>"  <?php if($row->City_Id == $item->City_Id): ?> selected <?php endif; ?> ><?php echo e($item->City_name); ?></option>
	                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
	                                </select>
                                </div>	
	                            <div class="form-group row">
	                            	<div class="col-6">
										<button class="site-button button-lg btn-block" type="button">Cancel</button>
									</div> 
									<div class="col-6">
										<button class="site-button button-lg btn-block" type="submit">Update</button>
									</div>
								</div>
			                </form>
		                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		                <div class="dlab-divider bg-gray-dark text-gray-dark icon-center"><i class="fa fa-circle bg-white text-gray-dark"></i></div>
		           </div>
		            <!-- Product END -->
		        </div>
		        <!-- contact area  END -->
	        </div>
        	<div class="col-3"></div>
    	</div>
    </div>
	<!-- Content END-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection("js-section"); ?>

<!-- JavaScript  files ========================================= -->
<script src="<?php echo e(URL::asset('UserSide/assets/js/combining.js')); ?>"></script><!-- COMBINING JS  -->
<?php $__env->stopSection(); ?>

<!-- //home,insurance company, about, contact us, my account--change password--my profile--logout,
//shop,testimonials, buy car -->
<?php echo $__env->make('Front-Side.Master.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectWork\CarProject\resources\views/Front-Side/My-Profile/viewuserprofile.blade.php ENDPATH**/ ?>